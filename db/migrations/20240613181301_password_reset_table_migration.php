<?php

declare(strict_types=1);

use Phinx\Db\Action\AddColumn;
use Phinx\Migration\AbstractMigration;

final class PasswordResetTableMigration extends AbstractMigration
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
        $table = $this->table('password_reset_tokens', ['id' => false, 'primary_key' => 'user_id']);
        $table->addColumn('user_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('token', 'string')
            ->addColumn('expires_at', 'timestamp')
            ->addTimestamps('created_at', null)
            ->create();
    }
}
