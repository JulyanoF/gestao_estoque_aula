<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProdutos extends AbstractMigration
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
        $table = $this->table('produtos');
        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit'   => 120,
            'null'    => false,
        ]);
        $table->addColumn('descricao', 'text', [
            'default' => null,
            'null'    => true,
        ]);
        $table->addColumn('preco', 'decimal', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('estoque', 'integer', [
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
