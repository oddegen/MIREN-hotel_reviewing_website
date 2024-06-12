<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class HotelImageTableMigration extends AbstractMigration
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
        $table = $this->table('hotel_images', ['id' => 'image_id']);
        $table->addColumn('hotel_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('image_url', 'text', ['null' => false])
            ->addColumn('base_image', 'boolean', ['null' => false])
            ->addForeignKey('hotel_id', 'hotels', 'hotel_id', ['delete' => 'CASCADE'])
            ->create();
    }
}
