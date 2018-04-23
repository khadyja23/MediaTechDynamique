<?php
$servername = "localhost";
$username = "khadija";
$password = "Passer@_123";
try {
    $mabase = new PDO("mysql:host=$servername;dbname=khadija", $username, $password);
    $mabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion effectuee";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>