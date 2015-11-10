<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='style.css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>
<?php
$current_page = "index";
require_once("header.php");
?>
<?php
session_start();
error_reporting(E_ALL);

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA';


try {
    $db = new PDO($dsn, $username, $password);

} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}

$sqlq = "SELECT password FROM login WHERE user = username AND FIND_IN_SET(companyID, attachedCompanyIDs)"
?>
<div class ="background">
<div class ="container">
	<div class ="post">
		<h1> Login </h1>
	</div>
	<div>
	<form class ="login" method="post" action="login.php">
		<input class = "login" type='text' placeholder='Username' id="username"><br>
		<input type='password' placeholder='Password' id="password"><br>
		<label><input type='checkbox'>Remember me</label><br>
		<input type='submit' value='Login'><br>
		<a href='forgot.html'>Forgot password?</a>
		<a href='register.html'>Click here to register</a>
</form>
</div>
</div>
</body>
</html>

