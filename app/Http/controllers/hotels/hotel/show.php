<?php

use App\Models\User;
use Core\App;
use Core\Database;

$user = new User(App::resolve(Database::class));

if(!$user->findByUUID($id)) {
    abort();
}

view("hotels/hotel/show.php", [
    'id' => $id 
]);