
<?php
$current_page = "swap";
require_once("header.php");

function getresults(){

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA';
try {
	$_SESSION["gender"] = $_GET["gen"];
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(!isset($_SESSION["upper"])){
      $search_sql= "SELECT * FROM Items WHERE gender ='".$_GET["gen"]."'";
    }
    else{
      $search_sql= "SELECT * FROM Items WHERE price >'".$_SESSION["lower"]."' AND price <'".$_SESSION["upper"]."' AND gender='".$_GET["gen"]."'";
    }
	
    $thing = $conn ->prepare($search_sql);
	$thing->execute();
	$res = $thing -> fetchAll();
	$allitems = array();
	$counter = 0;
	if (count($res)>0) {
		foreach($res as $row){
			$allitems[$counter] = output($row["name"],$row["description"], $row["price"], $row["image_name"]);
			$counter = $counter +1;
		}
		return $allitems;
    }
	else {
		echo "No matching items";
		return $allitems;
	}

    }
catch(PDOException $e) {
    echo $search_query . "<br>" . $e->getMessage();
    }
}

function output($name,$description,$price, $image){
  return '<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
      <img src='."$image".' alt="">
      <div class="caption">
        <h4 class="pull-right">$'."$price".'</h4>
        <h4><a href="#">'."$name".'</a>
        </h4>
        <p>'."$description".'</p>
      </div>
    </div>
  </div>';
}
	?>
  <html>
  <head>
  <link rel="stylesheet" href="swapstyle.css">
  </head>
  <body>
  <div class="container">

          <div class="row">

              <div class="col-md-3">
                  <p class="lead">Price</p>
                  <div class="list-group">
                    <div class="list-group">
						<a href="limit.php?upper=5&lower=0" class="list-group-item <?php 
						if(isset($_SESSION["upper"]) && $_SESSION["upper"] == "5") {echo "active";} 
						?>">$1-5</a>
						<a href="limit.php?upper=10&lower=4.99" class="list-group-item <?php 
						if(isset($_SESSION["upper"]) && $_SESSION["upper"] == "10") {echo "active";} 
						?>">$5-10</a>
						<a href="limit.php?upper=20&lower=9.99" class="list-group-item <?php 
						if(isset($_SESSION["upper"]) && $_SESSION["upper"] == "20") {echo "active";} 
						?>">$10-20</a>
						<a href="limit.php?upper=5000&lower=19.99" class="list-group-item <?php 
						if(isset($_SESSION["upper"]) && $_SESSION["upper"] == "5000") {echo "active";} 
						?>">$20+</a>
                    </div>
                  </div>
  				<p class="lead">Gender</p>
                  <div class="list-group">
                    <a href="gender.php?gen=male" class="list-group-item <?php 
						if($_GET["gen"] == "male") {echo "active";} 
						?>">Male</a>
                    <a href="gender.php?gen=female" class="list-group-item <?php 
						if($_GET["gen"] == "female") {echo "active";} 
						?>">Female</a>
                    <a href="gender.php?gen=either" class="list-group-item <?php 
						if($_GET["gen"] == "either") {echo "active";} 
						?>">Unisex</a>
                  </div>
                  <a href="swap.php" class="list-group-item">Clear Filters</a>
              </div>

              <div class="col-md-9">
  				<br>
                  <div class="row">
  					<?php
  						$finalitems = getresults();
  						foreach ($finalitems as $item) {
  							echo $item;
  						}
  					?>
  				</div>
              </div>
          </div>
      </div>
  </body>
