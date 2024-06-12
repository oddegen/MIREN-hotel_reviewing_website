<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class AmenitySeeder extends AbstractSeed
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
        $date = [
            [
                'name' => "Free Wifi"
            ],
            [
                'name' => "Free Parking"
            ],
            [
                'name' => "Free Cancellation"
            ],
            [
                'name' => "Air Conditioning"
            ],
            [
                'name' => "Private Bathroom"
            ],
            [
                'name' => "24-hour Front Desk"
            ],
            [
                'name' => "Key Card Access"
            ],
            [
                'name' => "Breakfast Included"
            ]
        ];

        $table = $this->table('amenities');
        $table->insert($date)
            ->saveData();
    }
}
