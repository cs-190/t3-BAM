<?php

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA';

$name = $_POST["title"];
$description = $_POST["desc"];


try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Items (name, description)
    VALUES ('$name', '$description')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }





 ?>
