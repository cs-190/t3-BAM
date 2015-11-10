<<<<<<< HEAD
=======


>>>>>>> f792dc40d507028eecacb20de7ce927fe2b5c2ea
<html>

<head>

<meta charset="UTF-8">

<link rel='stylesheet' href='style.css'>

<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>



</head>

<body>

<?php

  	$current_page = "login";

  	require_once("header.php");

?>

<div class ="background">

<div class ="container">

	<div class ="login">

		<h1> Login </h1>

	</div>

	<div>

	<form id="login" class ="login" method="post" action="loginHandler.php">

		<input type='text' name="username" placeholder='Username' id="username"><br>

		<input type='password' name="password" placeholder='Password' id="password"><br>

		<label><input type='checkbox'>Remember me</label><br>

		<button class='btn btn-default' value='Login'>Login</button><br>

		<a href='forgot.html'>Forgot password?</a>

		<a href='register.php'>Click here to register</a>

	</form>

	</div>

</div>

</body>

</html>

>>>>>>> f792dc40d507028eecacb20de7ce927fe2b5c2ea
