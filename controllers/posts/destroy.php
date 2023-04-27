<?php

use core\App;
use core\Database;

// 1 use this
// $db = App::getContainer()->resolve('core\Database');
// $db = App::container()->resolve(Database::class);

// 2 or use this
$db = App::resolve(Database::class);


$db->query('delete from posts where id = :id', ['id' => $_POST['id']]);

header('location: /posts');
exit();


