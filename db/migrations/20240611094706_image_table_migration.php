<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ImageTableMigration extends AbstractMigration
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
    public function up(): void
    {
        $this->table('room_images')->drop()->save();
        $this->table('hotel_images')->drop()->save();

        $table = $this->table('images', ['id' => 'image_id']);
        $table->addColumn('image_url', 'text', ['null' => false])
            ->addColumn('base_image', 'boolean', ['null' => false])
            ->create();

        $table = $this->table('hotel_images', ['id' => false, 'primary_key' => ['hotel_id', 'image_id']]);
        $table->addColumn('hotel_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('image_id', 'integer', ['signed' => false, 'null' => false])
            ->addForeignKey('hotel_id', 'hotels', 'hotel_id', ['delete' => 'CASCADE'])
            ->addForeignKey('image_id', 'images', 'image_id', ['delete' => 'CASCADE'])
            ->create();

        $table = $this->table('room_images', ['id' => false, 'primary_key' => ['room_id', 'image_id']]);
        $table->addColumn('room_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('image_id', 'integer', ['signed' => false, 'null' => false])
            ->addForeignKey('room_id', 'rooms', 'room_id', ['delete' => 'CASCADE'])
            ->addForeignKey('image_id', 'images', 'image_id', ['delete' => 'CASCADE'])
            ->create();
    }

    public function down(): void 
    {
        $this->table('room_images')->drop()->save();
        $this->table('hotel_images')->drop()->save();
        $this->table('images')->drop()->save();


        $table = $this->table('room_images', ['id' => 'image_id']);
        $table->addColumn('room_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('image_url', 'text', ['null' => false])
            ->addForeignKey('room_id', 'rooms', 'room_id', ['delete' => 'CASCADE'])
            ->create();

        $table = $this->table('hotel_images', ['id' => 'image_id']);
        $table->addColumn('hotel_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('image_url', 'text', ['null' => false])
            ->addColumn('base_image', 'boolean', ['null' => false])
            ->addForeignKey('hotel_id', 'hotels', 'hotel_id', ['delete' => 'CASCADE'])
            ->create();
    }
}
