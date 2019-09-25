<?php

require_once('../vendor/autoload.php');

$stripeSecret = "sk_test_HAKlQ5wywoODbrPmf5yc3YgK00WocXkYWP";

\Stripe\Stripe::setApiKey($stripeSecret);

// Create a customer
$customer = \Stripe\Customer::create([
  "name" => $_POST['fname'] . " " . $_POST['lname'],
  "email" => $_POST['email'],
  "metadata" => array(
      "insta" => $_POST['username'],
      "highschool" => $_POST['highschool'],
      "college" => $_POST['college'],
      "type" => $_POST['type']
   ),
  "source" => $_POST['stripeToken'] // obtained with Stripe.js
]);

$customerID = $customer['id'];

// Charge a customer
if($_POST['type'] == 'basic'){
    $charge = \Stripe\Charge::create([
      "amount" => 500,
      "currency" => "usd",
      "customer" => $customerID,
      "description" => "Basic Edit"
    ]);
}

if($_POST['type'] == 'specialty'){
    $charge =\Stripe\Charge::create([
      "amount" => 700,
      "currency" => "usd",
      "customer" => "$customerId",
      "description" => "Specialty Edit"
    ]);
}

header("Location: /postordercard/postordercard.php");

?>