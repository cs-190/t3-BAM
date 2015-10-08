<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
	<a class="<?php if($current_page == "index") {echo "active";} ?>" href="index.php">Home</a>
	<a class="<?php if($current_page == "about") {echo "active";} ?>" href="about.php">About</a>
	<a class="<?php if($current_page == "contact") {echo "active";} ?>" href="contact.php">Contact</a>
</nav>