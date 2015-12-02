<?php
session_start();
  unset($_SESSION["lower"]);
  unset($_SESSION["upper"]);
  unset($_SESSION["gender"]);

  header("Location: swap.php");
?>
