<?php
include __DIR__ . '/setup.php';

$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];
$amount = intval($_POST['amount']) * 100;

$customer = \Stripe\Customer::create([
    'email'  => $email,
    'source' => $token,
]);

$charge = \Stripe\Charge::create([
    'customer' => $customer->id,
    'amount'   => $amount,
    'currency' => 'eur',
]);

echo '<h1>Danke für deine Spende von ' . ($amount / 100) . '€</h1>';