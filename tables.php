<?php
session_start();
error_reporting(E_ALL);

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
$username = 'bmp17';
$password = 'UtQQUq7qx7SA
';


try {
    $db = new PDO($dsn, $username, $password);

} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}
$sqlq = "INSERT INTO workshop (login) VALUES (:stuff)";
// $sql = "UPDATE Test SET stuff=:stuff WHERE id=:id";

$thingy = "wow";
$getready = $db->prepare($sqlq);
$getready->execute(array(':stuff' => $thingy));
echo "Entered data successfully\n";
?>