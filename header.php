<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id=header>
<form id="searchbar" method="get" action="">
	<input type="text" class="searchbar" size="21" maxlength="120">
	<input type="submit" value="search" class="searchbutton">
</form>
<nav class="navbar">
	<a class="<?php if($current_page == "index") {echo "active";} ?>" href="index.php">Home</a>
	<a class="<?php if($current_page == "about") {echo "active";} ?>" href="about.php">About</a>
	<a class="<?php if($current_page == "contact") {echo "active";} ?>" href="contact.php">Contact</a>
	<a class="<?php if($current_page == "form") {echo "active";} ?>" href="form.php">Form</a>
</nav>
</div>
</body>