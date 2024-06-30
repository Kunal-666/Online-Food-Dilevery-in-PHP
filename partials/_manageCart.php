<?php
include '_dbconnect.php';
session_start();
echo '<script src="https://js.stripe.com/v3/"></script>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['userId'];
    if (isset($_POST['addToCart'])) {
        $itemId = $_POST["itemId"];
        // Check whether this item exists
        $existSql = "SELECT * FROM `viewcart` WHERE pizzaId = '$itemId' AND `userId`='$userId'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if ($numExistRows > 0) {
            echo "<script>alert('Item Already Added.');
                    window.history.back(1);
                    </script>";
        } else {
            $sql = "INSERT INTO `viewcart` (`pizzaId`, `itemQuantity`, `userId`, `addedDate`) VALUES ('$itemId', '1', '$userId', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>
                    window.history.back(1);
                    </script>";
            }
        }
    }
    if (isset($_POST['removeItem'])) {
        $itemId = $_POST["itemId"];
        $sql = "DELETE FROM `viewcart` WHERE `pizzaId`='$itemId' AND `userId`='$userId'";
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('Removed');
                window.history.back(1);
            </script>";
    }
    if (isset($_POST['removeAllItem'])) {
        $sql = "DELETE FROM `viewcart` WHERE `userId`='$userId'";
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('Removed All');
                window.history.back(1);
            </script>";
    }
    if (isset($_POST['checkout'])) {
        $amount = $_POST["amount"];
        $address1 = $_POST["address"];
        $address2 = $_POST["address1"];
        $phone = $_POST["phone"];
        $zipcode = $_POST["zipcode"];
        $address = $address1 . ", " . $address2;
        $paymentMode = $_POST["mode"];
        if ($paymentMode == '0') {

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

                    <script>alert("Thanks for ordering with us. Your order id is ' . $orderId . '.");
                    window.location.href="http://localhost/OnlinePizzaDelivery/index.php";  
                    </script>';
                exit();
            }
        }
        if ($paymentMode == '1') {

            $_SESSION["amount"] = $_POST["amount"];
            $_SESSION["address1"] = $_POST["address"];
            $_SESSION["address2"] = $_POST["address1"];
            $_SESSION["phone"] = $_POST["phone"];
            $_SESSION["zipcode"] = $_POST["zipcode"];
            $_SESSION["paymentMode"] = $_POST["mode"];
            echo '


    <script type="text/javascript">
        var stripe = Stripe("pk_test_51PMajKI6WAL9Pozz6f934w7vR1nKYFKUpPY5ENAhyhkrcf8Xovgtid34dCii12hkuiMM9lSXpLyEgDzMxXRaBqyb00OWcCm97K");

        
            fetch("../create-checkout-session.php", {
                    method: "POST",
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({
                        sessionId: session.id
                    });
                })
                .then(function(result) {
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error("Error:", error);
                });
       
    </script>
            ';
        }
    }
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $pizzaId = $_POST['pizzaId'];
        $qty = $_POST['quantity'];
        $updatesql = "UPDATE `viewcart` SET `itemQuantity`='$qty' WHERE `pizzaId`='$pizzaId' AND `userId`='$userId'";
        $updateresult = mysqli_query($conn, $updatesql);
    }
}
