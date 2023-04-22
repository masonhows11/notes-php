<?php


require 'functions.php';

require 'router.php';


// connect to our mysql database

$host = "localhost";
$user = "root";
$pass = "1289..//";
$dbname = 'demoDb';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conn->prepare('select * from posts');
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($posts as $post) {
        echo "<ul>" .
              "<li>" . $post['title'] . "</li>"
            . "</ul>";

    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
