<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutosTable;
use App\Test\Factory\ProdutoFactory;
use Cake\TestSuite\TestCase;
use Faker\Factory;
use Faker\Generator;

/**
 * App\Model\Table\ProdutosTable Test Case
 */
class ProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutosTable
     */
    protected $Produtos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        // 'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config         = $this->getTableLocator()->exists('Produtos') ? [] : ['className' => ProdutosTable::class];
        $this->Produtos = $this->getTableLocator()->get('Produtos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Produtos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProdutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $produto = ProdutoFactory::make(1)->getEntity();
        // $produto = $this->Produtos->newEntity([
        //     'nome'      => 'Banana da Silva',
        //     'descricao' => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
        //     'preco'     => 15.50,
        //     'estoque'   => 20,
        //     'excluido'  => false
        // ]);
        // debug($produto);
        // die;
        $this->assertFalse($produto->hasErrors());
    }
}
