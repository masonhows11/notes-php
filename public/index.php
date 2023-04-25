<?php

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'functions.php';

require base_path('Database.php');

require base_path('Response.php');

require base_path('router.php');



// require 'Database.php';

// $config = require('config.php');

// $db = new Database($config['database']);
//
// $id = $_GET['id'];
//
// $query = "select * from posts where id = :id ";
//
// $posts = $db->query($query, ['id' => $id])->fetch();




