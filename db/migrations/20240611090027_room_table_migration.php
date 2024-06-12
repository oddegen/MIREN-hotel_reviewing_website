<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RoomTableMigration extends AbstractMigration
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
        $table = $this->table('rooms', ['id' => 'room_id']);
        $table->addColumn('hotel_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('bed_type', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('number_of_beds', 'integer')
            ->addColumn('number_of_bathrooms', 'integer')
            ->addColumn('price_per_night', 'decimal')
            ->addForeignKey('hotel_id', 'hotels', 'hotel_id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->create();
    }
}
