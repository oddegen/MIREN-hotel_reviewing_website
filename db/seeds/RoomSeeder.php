<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class RoomSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => "Comfort Room",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 150.00,
                'hotel_id' => 14
            ],
            [
                'name' => "Deluxe Room",
                'bed_type' => "Queen Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 200.00,
                'hotel_id' => 14
            ],
            [
                'name' => "Suite",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 2,
                'number_of_bathrooms' => 2,
                'price_per_night' => 300.00,
                'hotel_id' => 15
            ],
            [
                'name' => "Comfort Room",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 160.00,
                'hotel_id' => 15
            ],
            [
                'name' => "Deluxe Room",
                'bed_type' => "Queen Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 210.00,
                'hotel_id' => 16
            ],
            [
                'name' => "Suite",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 2,
                'number_of_bathrooms' => 2,
                'price_per_night' => 320.00,
                'hotel_id' => 16
            ],
            [
                'name' => "Comfort Room",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 180.00,
                'hotel_id' => 17
            ],
            [
                'name' => "Deluxe Room",
                'bed_type' => "Queen Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 220.00,
                'hotel_id' => 18
            ],
            [
                'name' => "Suite",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 2,
                'number_of_bathrooms' => 2,
                'price_per_night' => 350.00,
                'hotel_id' => 19
            ],
            [
                'name' => "Comfort Room",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 170.00,
                'hotel_id' => 21
            ],
            [
                'name' => "Deluxe Room",
                'bed_type' => "Queen Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 230.00,
                'hotel_id' => 21
            ],
            [
                'name' => "Suite",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 2,
                'number_of_bathrooms' => 2,
                'price_per_night' => 340.00,
                'hotel_id' => 22
            ],
            [
                'name' => "Comfort Room",
                'bed_type' => "King Size Bed",
                'number_of_beds' => 1,
                'number_of_bathrooms' => 1,
                'price_per_night' => 160.00,
                'hotel_id' => 23
            ],
        ];

        $table = $this->table('rooms');
        $table->insert($rooms)
            ->saveData();
    }
}
