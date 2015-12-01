<?php
$current_page = "pay";
require_once("header.php");
$seller_email = isset($_SESSION['seller_email']) ? $_SESSION['seller_email'] : 'no';
$item_name = isset($_SESSION['item_name']) ? $_SESSION['item_name'] : 'no';
$item_price = isset($_SESSION['item_price']) ? $_SESSION['item_price'] : 'no';
$test = isset($_SESSION['test']) ? $_SESSION['test'] : 'no';
$url = 'https://api.venmo.com/v1/payments';
	$fields = array(
		'access_token' => $test,
		'email' => $seller_email,
		'amount' => $item_price,
		'note' => $item_name);
	// use key 'http' even if you send the request to https://...
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($fields),
		),
	);
	
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	var_dump($result);	

?>