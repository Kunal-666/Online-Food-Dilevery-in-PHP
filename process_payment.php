<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('');

$token = $_POST['stripeToken'];

try {
    $charge = \Stripe\Charge::create([
        'amount' => 5000, // amount in cents
        'currency' => 'usd',
        'description' => 'Example charge',
        'source' => $token,
    ]);

    echo '<h1>Successfully charged $50.00!</h1>';
} catch (\Stripe\Exception\CardException $e) {
    echo 'Error: ' . $e->getMessage();
}
