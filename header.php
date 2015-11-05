<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
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