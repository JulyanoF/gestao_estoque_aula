<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusPedidosTable;
use App\Test\Factory\StatusPedidoFactory;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusPedidosTable Test Case
 * @group unitario
 */
class StatusPedidosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusPedidosTable
     */
    protected $StatusPedidos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        // 'app.StatusPedidos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config              = $this->getTableLocator()->exists('StatusPedidos') ? [] : ['className' => StatusPedidosTable::class];
        $this->StatusPedidos = $this->getTableLocator()->get('StatusPedidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StatusPedidos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StatusPedidosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $status_pedido = StatusPedidoFactory::make(1)->getEntity();
        $this->assertFalse($status_pedido->hasErrors());
    }
}
