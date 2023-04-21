<?php


require 'functions.php';

require 'router.php';


// connect to our mysql database

$servername = "localhost";
$username = "root";
$password = "1289..//";

try {
    $conn = new PDO("mysql:host=$servername;dbname=demoDb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
