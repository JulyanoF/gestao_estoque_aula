<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutosTable;
use App\Test\Factory\ProdutoFactory;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutosTable Test Case
 * @group unitario
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
        $this->assertFalse($produto->hasErrors());
    }

    public function testValidationPreco(): void
    {
        $produto               = ProdutoFactory::make(1)->getEntity();
        $produto_data          = $produto->toArray();
        $produto_data['preco'] = 'abc';
        $produto_new           = $this->Produtos->newEntity($produto_data);
        $campos_invalidos      = $produto_new->getInvalid();
        $this->assertTrue($produto_new->hasErrors());
        $this->assertArrayHasKey('preco', $campos_invalidos);
    }
}
