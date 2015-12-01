<?php


function getresults(){
  $current_page = "swap";
  require_once("header.php");
$search_results=$_POST['query'];
$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA';
try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $search_sql= "SELECT * FROM Items WHERE name LIKE '%".$search_results."%' OR description LIKE '%".$search_results."%'";



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
                      <a href="limit.php?upper=5&lower=0" class="list-group-item">$1-5</a>
                      <a href="limit.php?upper=10&lower=4.99" class="list-group-item">$5-10</a>
                      <a href="limit.php?upper=20&lower=9.99" class="list-group-item">$10-20</a>
                      <a href="limit.php?upper=5000&lower=19.99" class="list-group-item">$20+</a>
                    </div>
                  </div>
  				<p class="lead">Gender</p>
                  <div class="list-group">
                    <a href="gender.php?gen=male" class="list-group-item">Male</a>
                    <a href="gender.php?gen=female" class="list-group-item">Female</a>
                    <a href="gender.php?gen=either" class="list-group-item">Unisex</a>
                  </div>
                  <a href="undo.php" class="list-group-item">UNDOOOO</a>
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
