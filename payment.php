<?php
session_start();
$_SESSION["item_price"] = $_POST["item_price"];
$_SESSION["item_name"] = $_POST["item_name"];
$_SESSION["seller_email"] = $_POST["seller_email"];
header('Location: https://api.venmo.com/v1/oauth/authorize?client_id=3218&scope=make_payments%20access_profile');
//note the insert ID here in line above, create venmo developer account and get id for app!
?>
