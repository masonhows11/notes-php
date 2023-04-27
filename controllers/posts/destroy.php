<?php

use core\App;


$db = App::container()->resolve('core\Database');




$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

header('location: /posts');
exit();


