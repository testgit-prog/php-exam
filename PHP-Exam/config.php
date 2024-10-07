<?php 

$hostname = 'localhost';
$dbname = 'php-exam';
$username = 'root'; 
$password = ''; 
$connection = null;

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection error: " . $e->getMessage();
    die();
}

?>