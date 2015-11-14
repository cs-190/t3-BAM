<?php
session_start();

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA';


$user = $_POST["username"];
$pass = $_POST["password"];
// To protect MySQL injection for Security purpose
$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT password FROM Users WHERE username = :user LIMIT 1";
    $ready = $conn->prepare($sql);
    $ready->execute(array(':user' =>$user));

    if($ready->rowCount() == 1) {
        $check = $ready->fetchColumn(0);
        if(password_verify($pass, $check)){
          echo "Good login";
          $_SESSION['login_user']=$user; // Initializing Session
          header( "Location: https://users.cs.duke.edu/~ays7/t3-BAM/index.php" );
        } else {
            echo "bad login";
        }
    } else {
        echo "error";
    }


    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
