<?php


require 'functions.php';

require 'router.php';

require 'database.php';

$config = require('config.php');
$db = new Database($config);
$posts = $db->query("select * from posts")->fetchAll();

dd($posts);


