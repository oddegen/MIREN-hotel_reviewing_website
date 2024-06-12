<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AmenityTableMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('amenities', ['id' => 'amenity_id']);
        $table->addColumn('name', 'string', ['limit' => 100, 'null' => false])->create();        
        
        if($this->hasTable('amenities')) {
            $table = $this->table('hotel_amenity', ['id' => false, 'primary_key' => ['hotel_id', 'amenity_id']]);
            $table->addColumn('hotel_id', 'integer', ['signed' => false, 'null' => false])
                ->addColumn('amenity_id', 'integer', ['signed' => false, 'null' => false])
                ->addForeignKey('hotel_id', 'hotels', 'hotel_id', ['delete' => 'CASCADE'])
                ->addForeignKey('amenity_id', 'amenities', 'amenity_id', ['delete' => 'CASCADE'])
                ->create();
        }
    }
}
