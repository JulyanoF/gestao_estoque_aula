<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosTable;
use App\Test\Factory\PedidoFactory;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosTable Test Case
 * @group unitario
 */
class PedidosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosTable
     */
    protected $Pedidos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        // 'app.Pedidos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config        = $this->getTableLocator()->exists('Pedidos') ? [] : ['className' => PedidosTable::class];
        $this->Pedidos = $this->getTableLocator()->get('Pedidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pedidos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PedidosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $pedido = PedidoFactory::make(1)->getEntity();
        $this->assertFalse($pedido->hasErrors());
    }
}
