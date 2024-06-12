<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class HotelSeeder extends AbstractSeed
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
        $data = [
            [
                'name' => "Hotel Norrebro",
                'description' => "3-star hotel in heart of Copenhagen",
                'location' => "Copenhagen",
                'star_rating' => 3,
                'rating' => 9.6
            ],
            [
                'name' => "Hotel Central Park",
                'description' => "4-star hotel near Central Park",
                'location' => "New York",
                'star_rating' => 4,
                'rating' => 9.4
            ],
            [
                'name' => "Hotel Riviera",
                'description' => "Luxury hotel with sea view",
                'location' => "Portugal",
                'star_rating' => 5,
                'rating' => 9.8
            ],
            [
                'name' => "Hotel Berlin Plaza",
                'description' => "Modern hotel in Berlin city center",
                'location' => "Berlin",
                'star_rating' => 4,
                'rating' => 9.2
            ],
            [
                'name' => "Hotel Tokyo Central",
                'description' => "Conveniently located near Tokyo Station",
                'location' => "Tokyo",
                'star_rating' => 4,
                'rating' => 9.5
            ],
            [
                'name' => "Hotel Sydney Harbour",
                'description' => "Spectacular views of Sydney Harbour",
                'location' => "Sydney",
                'star_rating' => 5,
                'rating' => 9.7
            ],
            [
                'name' => "Hotel Roma",
                'description' => "Elegant hotel in Rome",
                'location' => "Rome",
                'star_rating' => 4,
                'rating' => 9.3
            ],
            [
                'name' => "Hotel Paris Champs-Elysées",
                'description' => "Charming hotel near Champs-Elysées",
                'location' => "Paris",
                'star_rating' => 5,
                'rating' => 9.6
            ],
            [
                'name' => "Hotel London Bridge",
                'description' => "Boutique hotel near London Bridge",
                'location' => "London",
                'star_rating' => 3,
                'rating' => 9.1
            ],
            [
                'name' => "Hotel Madrid Plaza",
                'description' => "Centrally located in Madrid",
                'location' => "Madrid",
                'star_rating' => 4,
                'rating' => 9.4
            ]
        ];
        
        $table = $this->table('hotels');
        $table->insert($data)->saveData();
        
    }
}
