<?php
  unset($_SESSION["lower"]);
  unset($_SESSION["upper"]);
  unset($_SESSION["gender"]);

  header("Location: swap.php");
?>
