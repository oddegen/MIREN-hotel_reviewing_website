<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class RoomImageSeeder extends AbstractSeed
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
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image1', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image2', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image3', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image4', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image5', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image6', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image7', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image8', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image9', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image10', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image11', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image12', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image13', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image14', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image15', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image16', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image17', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image18', 'base_image' => false],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image19', 'base_image' => true],
            ['image_url' => 'https://via.placeholder.com/200x200?text=Image20', 'base_image' => false],
        ];
        
        $table = $this->table('images');
        $table->insert($images)->saveData();
        
        $roomImages = [
            ['room_id' => 15, 'image_id' => 21],
            ['room_id' => 15, 'image_id' => 22],
            ['room_id' => 16, 'image_id' => 23],
            ['room_id' => 16, 'image_id' => 24],
            ['room_id' => 17, 'image_id' => 25],
            ['room_id' => 17, 'image_id' => 26],
            ['room_id' => 18, 'image_id' => 27],
            ['room_id' => 18, 'image_id' => 28],
            ['room_id' => 19, 'image_id' => 29],
            ['room_id' => 19, 'image_id' => 30],
            ['room_id' => 20, 'image_id' => 31],
            ['room_id' => 20, 'image_id' => 32],
            ['room_id' => 21, 'image_id' => 33],
            ['room_id' => 21, 'image_id' => 34],
            ['room_id' => 22, 'image_id' => 35],
            ['room_id' => 22, 'image_id' => 36],
            ['room_id' => 23, 'image_id' => 37],
            ['room_id' => 23, 'image_id' => 38],
            ['room_id' => 24, 'image_id' => 39],
            ['room_id' => 24, 'image_id' => 40],
        ];
        
        $table = $this->table('room_images');
        $table->insert($roomImages)->saveData();
        
    }
}
