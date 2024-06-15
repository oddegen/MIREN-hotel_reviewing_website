<?php

use App\Models\Hotel;
use Core\App;
use Core\Database;

if(!$_POST["_id"] == $user_id) {
    abort(500);
}

(new Hotel(App::resolve(Database::class)))->deleteHotel($id);