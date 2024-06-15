<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ReviewTableMigration extends AbstractMigration
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
        $table = $this->table('reviews', ['id' => 'review_id']);
        $table->addColumn('user_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('review', 'string')
            ->addColumn('rating', 'timestamp')
            ->addTimestamps()
            ->addForeignKey('user_id', 'users', 'user_id', ['delete' => 'CASCADE'])
            ->create();
    }
}
