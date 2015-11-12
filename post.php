<head>
<link rel="stylesheet" href="formstyle.css">
</head>
<?php
	$current_page = "post";
	require_once("header.php");
?>
<body>
	<div class ="post-box">
	<div class ="post">
		<h1> Post New Item </h1>
	</div>
	<div>
	<form id="post" action="postHandler.php" method="post">
		<div id="pad">
  		<label>Post Title:</label>
  		<input class="input-text" type="text" name="title" required>
  		<br>
		<br>
  		<label>Item Description:</label>
  		<textarea class="input-text" type ="text" name="desc" id="description" required></textarea>
  		<br>
		<br>
  		<label>Price:</label>
  		<input class="input-text" type="number" name="price" required>
  		<br>
		<br>
		<label>Suggested gender:</label>
		<div class="input-text">
			<input type="radio" name="sex" value="male">Male
			<input type="radio" name="sex" value="female">Female
			<input type="radio" name="sex" value="either">Either
		</div>
		<br>
		<br>
		<label>Contact email:</label>
		<input class="input-text" type="text" name="email" required>
		<br>
		<br>
		<input type="submit" value="Submit">
		<br>
		</pad>
	</form>
	</div>
	</div>
</body>
