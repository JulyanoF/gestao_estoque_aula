<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePedidos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('pedidos');
        $table->addColumn('id_cliente', 'integer', [
            'null' => false,
        ])->addForeignKey('id_cliente', 'clientes', 'id');
        $table->addColumn('id_produto', 'integer', [
            'null' => false,
        ])->addForeignKey('id_produto', 'produtos', 'id');
        $table->addColumn('id_status', 'integer', [
            'null' => false,
        ])->addForeignKey('id_status', 'status_pedidos', 'id');
        $table->addColumn('quantidade', 'integer', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('excluido', 'boolean', [
            'default' => false,
            'null'    => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'update'  => 'CURRENT_TIMESTAMP'
        ]);
        $table->create();
    }
}
