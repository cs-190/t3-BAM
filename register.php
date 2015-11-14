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

