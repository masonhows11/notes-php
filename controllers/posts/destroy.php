<?php

use core\App;
use core\Database;

 $db = App::container()->resolve('core\Database');
// $db = App::container()->resolve(Database::class);

$db = App::resolve(Database::class);


$db->query('delete from posts where id = :id', ['id' => $_POST['id']]);

header('location: /posts');
exit();


