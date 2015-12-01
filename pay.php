<?php
	$current_page = "pay";
	require_once("header.php");
	$seller_email = isset($_SESSION['seller_email']) ? $_SESSION['seller_email'] : 'no';
	$item_name = isset($_SESSION['item_name']) ? $_SESSION['item_name'] : 'no';
	$item_price = isset($_SESSION['item_price']) ? $_SESSION['item_price'] : 'no';
	echo $item_name;
	echo $item_price;
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

	function removeData(){
		$item_name = isset($_SESSION['item_name']) ? $_SESSION['item_name'] : 'no';
		$item_price = isset($_SESSION['item_price']) ? $_SESSION['item_price'] : 'no';
		$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
		$username = 'bmp17';
		$password = 'UtQQUq7qx7SA';

		try {
		  $conn = new PDO($dsn, $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "DELETE FROM Items WHERE name='".$item_name."' AND price='".$item_price."'";
		  $conn->exec($sql);
		  echo "record deleted successfully";
		  }
		catch(PDOException $e){
		  echo $sql . "<br>" . $e->getMessage();
		}

	}
	removeData();
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result !== false) {
		var_dump($result);
		unset($_SESSION['item_price']);
		unset($_SESSION['item_name']);
		unset($_SESSION['seller_email']);
		header("Refresh: 2; URL=https://users.cs.duke.edu/~ays7/t3-BAM/swap.php");
      	die();
	} else {
		echo "bad request";
	}


?>