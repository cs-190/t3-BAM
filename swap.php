<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css">
</head>
<?php
	$current_page = "swap";
	require_once("header.php");

	function output($name,$description){
		return '<div class= "item"> <h1>The title is:'."$name".'</h1><p>The description is:'."$description".'</p></div>';
	}
	function getItems(){
		$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
		$username = 'bmp17';
		$password = 'UtQQUq7qx7SA';
		$conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT name,description FROM Items";
    $ready = $conn->prepare($sql);
    $ready->execute();
		$allitems = array();
		$counter = 0;
		$items = $ready->fetchAll();
			foreach($items as $row){
				$allitems[$counter] = output($row["name"],$row["description"]);
				$counter = $counter +1;
			}
			return $allitems;
}
?>
<body>

<div class ="filter">
<h1>Filters</h1>
<div class ="price">
	<h3>Price:</h3>
	<p>$1-5</p>
	<p>$5-10</p>
	<p>$10-20</p>
	<p>$20+</p>
</div>
<div class ="gender">
	<h3>Gender:</h3>
	<p>Male</p>
	<p>Female</p>
	<p>Unisex</p>
</div>
</div>
<div class ="view">
	<h1>Shopping XXXX</h1>
<div>
	<a href ="">

	<?php
		$finalitems = getItems();
		foreach ($finalitems as $item) {
			echo $item;
		}
	?>
	</a>
</div>
</div>
</body>
