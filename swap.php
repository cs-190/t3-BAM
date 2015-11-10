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
<h1>Swap items</h1>
<div class="wrap">

	<?php
		$finalitems = getItems();
		foreach ($finalitems as $item) {
			echo $item;
		}
	?>
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">
	<img class="box" src="https://placehold.it/400x400">

</div>
</body>
