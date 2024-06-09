<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RoleTableMigration extends AbstractMigration
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
        if($this->hasTable('users')) {
            $table = $this->table('roles', ['id' => 'role_id']);
            $table->addColumn('role_name',  'string', ['limit' => 50])
                ->addColumn('description', 'string', ['limit' => 255])
                ->create();

            $users = $this->table('users');
            $users->addColumn('role_id', 'integer', ['null' => true, 'signed' => false])
                ->addForeignKey('role_id', 'roles', 'role_id', ['delete' => 'SET_NULL', 'update' => 'CASCADE'])
                ->update();
        }
    }
}
