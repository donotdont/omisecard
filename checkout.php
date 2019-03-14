<?php

require_once 'omise-php/lib/Omise.php';

define('OMISE_PUBLIC_KEY', 'pkey_test');
define('OMISE_SECRET_KEY', 'skey_test');

$charge = OmiseCharge::create(array(
	'amount' => 150012,
	'currency' => 'thb',
	'card' => $_POST['omiseToken'],
));

echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($charge);
echo '</pre>';

