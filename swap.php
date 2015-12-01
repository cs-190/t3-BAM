<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="swapstyle.css">
<script src="buy.js"></script>
</head>
<?php
	$current_page = "swap";
	require_once("header.php");
	//if (isset($_POST['submit'])) {
	//	$submit = $_POST['submit'];
	//	if($submit == "submit" )
	//	{
	//		$_SESSION["item_price"] = $_POST["item_price"];
	//		$_SESSION["item_name"] = $_POST["item_name"];
	//		$_SESSION["seller_email"] = $_POST["seller_email"];
			//go to page two, with the total from page1.php passed as a $__GET value
	//		header("payment");
	//	}
	//}
	function output($name,$description,$price,$email){
		return '<div class="col-sm-4 col-lg-4 col-md-4">
			<div class="thumbnail">
				<img src="https://placehold.it/320x150" alt="">
				<div class="caption">
					<h4 class="pull-right">$'."$price".'</h4>
					<h4><a href="#">'."$name".'</a></h4>
					<p>'."$description".'</p>
					<form method="post" action="payment.php">
						<input type="hidden" name="item_price" id="item_price" value="'."$price".'"/>
						<input type="hidden" name="item_name" id="item_name"  value="'."$name".'"/>
						<input type="hidden" name="seller_email" id="seller_email"  value="'."$email".'"/>
						<button class="btn btn-default" type="submit" name="submit" value="submit">Buy</button>
					</form>
				</div>
			</div>
		</div>';
	}
	//<button class="btn btn-default" onclick="buy(\''."$name".'\',\''."$price".'\',\''."$email".'\')">Buy</button>
	function getItems(){
		$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
		$username = 'bmp17';
		$password = 'UtQQUq7qx7SA';
		$conn = new PDO($dsn, $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT name,description,price,email FROM Items";
		$ready = $conn->prepare($sql);
		$ready->execute();
		$allitems = array();
		$counter = 0;
		$items = $ready->fetchAll();
		foreach($items as $row){
			$allitems[$counter] = output($row["name"],$row["description"],$row["price"],$row["email"]);
			$counter = $counter +1;
		}
		return $allitems;
}
?>
<body>
<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Price</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">$1-5</a>
                    <a href="#" class="list-group-item">$5-10</a>
                    <a href="#" class="list-group-item">$10-20</a>
                    <a href="#" class="list-group-item">$20+</a>
                </div>
				<p class="lead">Gender</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Male</a>
                    <a href="#" class="list-group-item">Female</a>
                    <a href="#" class="list-group-item">Unisex</a>
                </div>
            </div>

            <div class="col-md-9">
				<br>
                <div class="row">
					<?php
						$finalitems = getItems();
						foreach ($finalitems as $item) {
							echo $item;
						}
					?>
				</div>
            </div>
        </div>
    </div>
</body>
