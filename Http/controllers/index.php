<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$sql = "SELECT 
            h.name AS name,
            h.location AS location,
            h.rating AS rating,
            MIN(r.price_per_night) AS price,
            i.image_url AS hotel_image
        FROM 
            hotels h
        JOIN 
            rooms r ON h.hotel_id = r.hotel_id
        LEFT JOIN 
            hotel_images ih ON h.hotel_id = ih.hotel_id
        JOIN 
            images i ON ih.image_id = i.image_id AND i.base_image = TRUE
        GROUP BY 
            h.hotel_id, h.name, h.location, h.rating, i.image_url
        ORDER BY 
            h.rating DESC
        LIMIT 5;
";

$hotels = $db->query($sql)->get();

extract($db->query('SELECT count(*) AS total_no_rooms FROM rooms')->find());

view("index.view.php", [
    'hotels' => $hotels,
    'total_rooms' => $total_no_rooms
]);