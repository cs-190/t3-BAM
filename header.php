<?php session_start(); ?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $current_page;?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="navbarstyle.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>	
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Swap</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php" class="<?php if($current_page == "index") {echo "active";} ?>">Home</a></li>
				<li><a href="swap.php" class="<?php if($current_page == "swap") {echo "active";} ?>">Shop</a></li>
				<li><a href="post.php" class="<?php if($current_page == "post") {echo "active";} ?>">Post A Costume</a></li>
				<?php
				if(!isset($_SESSION['login_user'])){
				echo "<li><a href='login.php' id='login-button' class="; if($current_page == "login") {echo "active";} echo ">Login/Sign up</a></li>";
				} else {
					echo 
					"<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>"; echo $_SESSION['login_user']; echo "<span class='caret'></span></a>
						<ul class='dropdown-menu' role='menu'>
							<li><a href='#'>Action1</a></li>
							<li><a href='#'>Action2</a></li>
							<li class='divider'></li>
							<li><a href='logout.php'>Logout</a></li>
						</ul>
					</li>";
				}
				?>
			</ul>
			<form class="navbar-form navbar-right search-form" role="search">
				<input type="text" class="form-control" placeholder="Search" />
			</form>
		</div>
	</div>
</nav>
