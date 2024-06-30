<?php
session_start();
include('partials/_dbconnect.php');
$amount = $_SESSION["amount"];
$address1 = $_SESSION["address1"];
$address2 = $_SESSION["address2"];
$phone = $_SESSION["phone"];
$zipcode = $_SESSION["zipcode"];
$address = $address1 . ", " . $address2;
$paymentMode = $_SESSION["paymentMode"];
$userId = $_SESSION['userId'];

$sql = "INSERT INTO `orders` (`userId`, `address`, `zipCode`, `phoneNo`, `amount`, `paymentMode`, `orderStatus`, `orderDate`) VALUES ('$userId', '$address', '$zipcode', '$phone', '$amount', '$paymentMode', '0', current_timestamp())";
$result = mysqli_query($conn, $sql);
$orderId = $conn->insert_id;
if ($result) {
    $addSql = "SELECT * FROM `viewcart` WHERE userId='$userId'";
    $addResult = mysqli_query($conn, $addSql);
    while ($addrow = mysqli_fetch_assoc($addResult)) {
        $pizzaId = $addrow['pizzaId'];
        $itemQuantity = $addrow['itemQuantity'];
        $itemSql = "INSERT INTO `orderitems` (`orderId`, `pizzaId`, `itemQuantity`) VALUES ('$orderId', '$pizzaId', '$itemQuantity')";
        $itemResult = mysqli_query($conn, $itemSql);
    }
    $deletesql = "DELETE FROM `viewcart` WHERE `userId`='$userId'";
    $deleteresult = mysqli_query($conn, $deletesql);
    echo '

<script>
    alert("Thanks for ordering with us");
    window.location.href = "http://localhost/OnlinePizzaDelivery/index.php";
</script>';
    exit();
}
