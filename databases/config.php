<?php


$dbname ="cursophp";
$dbuser = "root";
$dbpass = "";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=$dbname","$dbuser","$dbpass");
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo $e->getMessage();
}



?>