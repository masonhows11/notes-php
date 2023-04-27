<?php

use core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

header('location: /posts');
exit();


