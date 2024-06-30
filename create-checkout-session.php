<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
session_start();
$userId = $_SESSION['userId'];

\Stripe\Stripe::setApiKey('sk_test_51PMajKI6WAL9PozzajkMVEwKjKxTEDUaDiGgYICrtgDpdbHRMgaNcbk9236EJMRt8fVS7DV4zGMBVrJ2WAgGXHzx00qqyNH0We');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/OnlinePizzaDelivery/';

// Base price of the product in paise (e.g., 2000 paise = ₹20.00)
$base_price =  $_SESSION["amount"] * 100;

// Calculate GST (18% of the base price)
// $gst = $base_price * 0.18;

// Total amount including GST
// $total_amount = $base_price + $gst;
$total_amount = $base_price;




$checkout_session = \Stripe\Checkout\Session::create([
    // 'payment_method_types' => ['wallet', 'netbanking'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'inr',
            'product_data' => [
                'name' => 'name',
            ],
            'unit_amount' => $total_amount,
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . 'success.php',
    'cancel_url' => $YOUR_DOMAIN . 'cancel.php',
]);

echo json_encode(['id' => $checkout_session->id]);
