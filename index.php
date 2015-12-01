<?php
$current_page = "index";
require_once("header.php");
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="row carousel-holder">

	<div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				<li data-target="#carousel-example-generic" data-slide-to="6"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/all.png" alt="all clothes">
					<div class="carousel-caption">
						<h1>Shop All Costumes</h1>
					</div>
					</a>
				</div>
				<div class="item">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/animals.jpg" alt="animals" >
					<div class="carousel-caption">
						<h1>Animal Costumes</h1>
					</div>
					</a>
				</div>
				<div class="item">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/country.jpg" alt="country">
					<div class="carousel-caption">
						<h1>Country/Western Costumes</h1>
					</div>
					</a>
				</div>
				<div class="item">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/decades.jpg" alt="decades">
					<div class="carousel-caption">
						<h1>Decades Costumes</h1>
					</div>
					</a>
				</div>
				<div class="item">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/neon.jpg" alt="neon">
					<div class="carousel-caption">
						<h1>Neon Costumes</h1>
					</div>
					</a>
				</div>
				<div class="item">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/sports.jpg" alt="sports">
					<div class="carousel-caption">
						<h1>Sports Costumes</h1>
					</div>
					</a>
				</div>
				<div class="item">
					<a href="swap.php">
					<img class="slide-image img-responsive center-block" src="img/tropical.jpg" alt="tropical">
					<div class="carousel-caption">
						<h1>Tropical Costumes</h1>
					</div>
					</a>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>

</div>
</div>


</body>
