<?php 
session_start();
session_destroy();
header("Location: https://users.cs.duke.edu/~ays7/t3-BAM/index.php");
die();
?>