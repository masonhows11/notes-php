<?php


require 'functions.php';

require 'router.php';

require 'database.php';


$db = new Database();
$posts = $db->query("select * from posts where id = 1");

dd($posts);


