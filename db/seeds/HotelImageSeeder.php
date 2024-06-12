<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class HotelImageSeeder extends AbstractSeed
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
        $images = [
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image1', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image2', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image3', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image4', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image5', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image6', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image7', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image8', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image9', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image10', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image11', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image12', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image13', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image14', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image15', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image16', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image17', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image18', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image19', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/300x200?text=Image20', 'base_image' => false],
        ];
        
        $table = $this->table('images');
        $table->insert($images)->saveData();
        
        $hotelImages = [
            ['hotel_id' => 14, 'image_id' => 1],
            ['hotel_id' => 14, 'image_id' => 2],
            ['hotel_id' => 15, 'image_id' => 3],
            ['hotel_id' => 15, 'image_id' => 4],
            ['hotel_id' => 16, 'image_id' => 5],
            ['hotel_id' => 16, 'image_id' => 6],
            ['hotel_id' => 17, 'image_id' => 7],
            ['hotel_id' => 17, 'image_id' => 8],
            ['hotel_id' => 18, 'image_id' => 9],
            ['hotel_id' => 18, 'image_id' => 10],
            ['hotel_id' => 19, 'image_id' => 11],
            ['hotel_id' => 19, 'image_id' => 12],
            ['hotel_id' => 20, 'image_id' => 13],
            ['hotel_id' => 20, 'image_id' => 14],
            ['hotel_id' => 21, 'image_id' => 15],
            ['hotel_id' => 21, 'image_id' => 16],
            ['hotel_id' => 22, 'image_id' => 17],
            ['hotel_id' => 22, 'image_id' => 18],
            ['hotel_id' => 23, 'image_id' => 19],
            ['hotel_id' => 23, 'image_id' => 20],
        ];
        
        $table = $this->table('hotel_images');
        $table->insert($hotelImages)->saveData();
    }
}
