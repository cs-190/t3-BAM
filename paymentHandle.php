<?php
	$current_page = "finished";
  	require_once("header.php");
	$_SESSION['test']= $_GET["access_token"];
	$seller_email = isset($_SESSION['seller_email']) ? $_SESSION['seller_email'] : 'no';
	$item_name = isset($_SESSION['item_name']) ? $_SESSION['item_name'] : 'no';
	$item_price = isset($_SESSION['item_price']) ? $_SESSION['item_price'] : 'no';
	//$ch = curl_init();
	// set url
?>
<html>
<body>

<div class ="container">
	<h1> Make a payment </h1>
	Seller: <?php echo $seller_email;?><br>
	Item: <?php  echo $item_name;?><br>
	Price: <?php  echo $item_price;?><br>
	<a href="pay.php">Submit</a>
</div>

</body>
</html>