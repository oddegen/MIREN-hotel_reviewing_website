<?php

namespace App\Models;

use Core\Database;
use PDO;

class Hotel {
    protected Database $_db;

    public function __construct(protected Database $db) {
        $this->_db = $db;
    }

    public function countHotelsByLocation($location) {
        $total_no_results = $this->_db->query("SELECT COUNT(*) AS total_hotels FROM hotels h JOIN rooms r ON h.hotel_id = r.hotel_id WHERE h.location = :location", [
            'location' => $location
        ])->find(PDO::FETCH_COLUMN);
        return $total_no_results;
    }

    public function getHotelsByLocation($location, $limit, $offset) {
        $sql = "SELECT
                h.name AS hotel_name,
                GROUP_CONCAT(DISTINCT a.name ORDER BY a.name SEPARATOR ', ') AS amenities_names,
                h.rating,
                MIN(r.price_per_night) AS price,
                r.name AS room_type,
                r.bed_type,
                r.number_of_beds,
                r.number_of_bathrooms,
                i.image_url
            FROM 
                hotels h
            JOIN 
                hotel_amenity ha ON h.hotel_id = ha.hotel_id
            JOIN 
                amenities a ON ha.amenity_id = a.amenity_id
            JOIN 
                rooms r ON h.hotel_id = r.hotel_id
            JOIN 
                room_images ri ON r.room_id = ri.room_id 
            JOIN 
                images i ON ri.image_id = i.image_id AND i.base_image = 1
            WHERE
                h.location = :location
            GROUP BY 
                h.hotel_id, r.room_id, i.image_url 
            ORDER BY 
                h.rating DESC, price ASC
            LIMIT :limit OFFSET :offset;
        ";

        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':location', $location, PDO::PARAM_STR);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTopHotels() {
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

        return $this->_db->query($sql)->get(PDO::FETCH_ASSOC);
    }

    public function countTotalRooms() {
        return $this->_db->query('SELECT count(*) AS total_no_rooms FROM rooms')->find(PDO::FETCH_COLUMN);
    }
}