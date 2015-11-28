<?php
	session_start();
	$current_page = "finished";
  	require_once("header.php");
	
	$_SESSION['test']= $_GET["access_token"];
	
?>
<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='style.css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>

<div class ="background">
<div class ="container">
	<h1> Make a payment </h1>
	<form id="login" method="post" action="paymentHandle.php">
		<input type='text' name="seller" placeholder='Seller username' id="seller"><br>
		<input type='text' name="amount" placeholder='Amount' id="amount"><br>
		<button class='btn btn-default' value='pay'>Submit Payment</button><br>
	</form>
</div>

</body>
</html>


