<<<<<<< HEAD
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

$sql = "INSERT INTO login (username, password, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
=======
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="register.css">
</head>
<body>
<?php
$current_page = "register";
require_once("header.php");

$nameErr = $usernameErr = $passwordErr = $emailErr = "";
$name = $username = $password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
    if (empty($_POST["username"])) {
     $usernameErr = "Name is required";
   } else {
     $username = test_input($_POST["username"]);
   }
   
   if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_POST["website"]);
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
     
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
	<div>
	<div class ="register">
		<h1> Register To Create An Account </h1>
	<form method="post" action="insert.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
	<p class="error">* required field.</p>
		Full Name:
		<input type="text" name="name" required>
		<span class="error">* <?php echo $nameErr;?></span>
		<br>
  		Desired username:
  		<input type="text" name="username" required>
  		<span class="error">* <?php echo $usernameErr;?></span>
  		<br>
  		Password:
  		<input type ="password" name="password" required>
  		<span class="error">* <?php echo $passwordErr;?></span>
  		<br>
		Duke Email:
		<input type="text" name="email" required>
		<span class="error">* <?php echo $emailErr;?></span>
		<br>
		<br>
		<button class="btn btn-default" value="Submit">Submit</button>
		<br>
	</form>
	</div>
	</div>
</body>
</html>
>>>>>>> f792dc40d507028eecacb20de7ce927fe2b5c2ea
