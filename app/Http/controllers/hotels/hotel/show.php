<?php

use App\Models\Hotel;
use App\Models\User;
use Core\App;
use Core\Database;

$user = new User(App::resolve(Database::class));

if(!$user->findByUUID($id)) {
    abort();
}

$hotels = (new Hotel(App::resolve(Database::class)))->getHotelByID($id);

view("hotels/hotel/show.php", [
    'id' => $id,
    'hotels' => $hotels
]);