<head>
<title>Post</title>
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
	<form>
  		Post Title:
  		<input type="text" name="title">
  		<br>
  		<br>
  		Item Description:
  		<input type ="text" name="description" style="width:200px; height:50px;">
  		<br>
  		<br>
  		<br>
  		Price:
  		<input type="number" name="price">
  		<br>
  		<br>
		Suggested gender of costume:
		<input type="radio" name="sex" value="male">Male
		<input type="radio" name="sex" value="female">Female
		<input type="radio" name="sex" value="either">Either
		<br>
		<br>
		Item will be:
		<input type="radio" name="sale" value="sale">For Sale
		<input type="radio" name="sale" value="rent">For Rent
		<br>
		<br>
		Contact email:
		<input type="text" name="email">
		<br>
		<br>
		<input type="submit" value="Submit">
		<br>
	</form>
	</div>
	</div>
</body>
