<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id=header>
	<form id="searchbar" method="get" action="">
		<input type="search" class="searchbar" size="50" maxlength="120">
		<input type="submit" value="search" class="searchbutton">
		<a class = "links" href="login.php">Sign-In</a>
		<a href =""> Starred Items</a>
	</form>
<nav class="navbar">
	<a class="<?php if($current_page == "index") {echo "active";} ?>" href="index.php">Home</a>
	<a class="<?php if($current_page == "form") {echo "active";} ?>" href="register.php">New Post</a>
	<a class="<?php if($current_page == "about") {echo "active";} ?>" href="about.php">About</a>
	<a class="<?php if($current_page == "contact") {echo "active";} ?>" href="contact.php">Contact</a>
</nav>
</div>
</body>