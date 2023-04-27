<?php

use core\App;
use core\Database;


$db = App::resolve(Database::class);

$post = $db->query('select * from posts where id = :id ', ['id' => $_GET['id']])->findOrFail();

// if ($post['user_id'] !== 7) {
//     abort(Response::FORBIDDEN);
// }

view("posts/show.view.php", [
    'heading' => 'My Post',
    'post' => $post
]);



