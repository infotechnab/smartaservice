<?php
$currency = '$'; //Currency sumbol or code

//db settings
$db_username = 'root';
$db_password = '';
$db_name = 'mycart';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

//paypal settings
$PayPalMode 			= 'live'; // sandbox or live
$PayPalApiUsername 		= 'info_api1.salyani.com.np'; //PayPal API Username
$PayPalApiPassword 		= '3KVRTE4GW75ZN5TS'; //Paypal API password
$PayPalApiSignature 	= 'ApNspTbocvQUrIp3vnyuldmuVJ-bAXmrCrE2FSowIFXKJAkGQ.pKuwKj'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/smartaservices/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/shopping-cart/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel

?>