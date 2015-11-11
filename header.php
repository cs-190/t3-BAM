<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $current_page;?></title>
<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="search-bar">
<form id="search" method="get" action="search.php?go" id="searchform">
	<input type="text" name="query" id="query" placeholder="Search">
	<button class="btn btn-default">Search</button>
</form>
<a href="login.php" id="login-button" class="button btn btn-default">Login</a>
</div>
<nav>
	<div class="wrap">
	<ul>
		<li class="<?php if($current_page == "index") {echo "active";} ?>"><a href="index.php">Home</a></li>
		<li class="<?php if($current_page == "faq") {echo "active";} ?>"><a href="faq.php">FAQ</a></li>
		<li class="<?php if($current_page == "swap") {echo "active";} ?>"><a href="swap.php">Swap</a></li>
		<li class="<?php if($current_page == "post") {echo "active";} ?>"><a href="post.php">Post</a></li>
	</ul>
	</div>
</nav>

<!-- <input type="submit" name="submit" value="Search" id="go-search"> -->
