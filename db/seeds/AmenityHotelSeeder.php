<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class AmenityHotelSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function getDependencies(): array
    {
        return [
            'AmenitySeeder'
        ];
    }
    
     public function run(): void
    {
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 14,
            'id1' => 9,
            'id2' => 12,
            'id3' => 16
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 15,
            'id1' => 11,
            'id2' => 15,
            'id3' => 13
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 16,
            'id1' => 11,
            'id2' => 16,
            'id3' => 9
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 17,
            'id1' => 16,
            'id2' => 11,
            'id3' => 9
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 18,
            'id1' => 10,
            'id2' => 12,
            'id3' => 13
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 19,
            'id1' => 14,
            'id2' => 15,
            'id3' => 16
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 20,
            'id1' => 10,
            'id2' => 16,
            'id3' => 12
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 21,
            'id1' => 11,
            'id2' => 12,
            'id3' => 10
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 22,
            'id1' => 16,
            'id2' => 15,
            'id3' => 14
        ]);
        
        $this->execute('INSERT INTO hotel_amenity(hotel_id, amenity_id) SELECT :hotel_id, a.amenity_id FROM amenities a WHERE a.amenity_id=:id1 OR a.amenity_id=:id2 OR a.amenity_id=:id3', [
            'hotel_id' => 23,
            'id1' => 13,
            'id2' => 12,
            'id3' => 11
        ]);
        
    }
}
