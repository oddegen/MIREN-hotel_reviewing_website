<?php

use App\Models\Hotel;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$hotel = new Hotel($db);
$topHotels = $hotel->getTopHotels();
$total_no_rooms = $hotel->countTotalRooms();

view("index.view.php", [
    'hotels' => $topHotels,
    'total_rooms' => $total_no_rooms
]);