<?php

use Core\App;
use Core\Database;

$user = App::resolve(Database::class)->query('select * from users where md5(`user_id`)=:id', [
    'id' => $id
])->find();

if (!$user) {
    abort(403);
}

view('auth/reset-password/create.php', [
    'id' => $id
]);