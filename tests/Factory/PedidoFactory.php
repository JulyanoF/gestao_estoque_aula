<?php
declare(strict_types=1);

namespace App\Test\Factory;

use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;
use Faker\Generator;

/**
 * PedidoFactory
 *
 * @method \App\Model\Entity\Pedido getEntity()
 * @method array<\App\Model\Entity\Pedido> getEntities()
 * @method \App\Model\Entity\Pedido|array<\App\Model\Entity\Pedido> persist()
 * @method static \App\Model\Entity\Pedido get(mixed $primaryKey, array $options = [])
 */
class PedidoFactory extends CakephpBaseFactory
{
    protected array $marshallerOptions = [
        'validate'         => false,
        'forceNew'         => true,
        'accessibleFields' => ['*' => true],
    ];
    /**
     * Defines the Table Registry used to generate entities with
     *
     * @return string
     */
    protected function getRootTableRegistryName(): string
    {
        return 'Pedidos';
    }

    /**
     * Defines the factory's default values. This is useful for
     * not nullable fields. You may use methods of the present factory here too.
     *
     * @return void
     */
    protected function setDefaultTemplate(): void
    {
        $this->setDefaultData(function (Generator $faker) {
            return [
                'quantidade' => $faker->randomNumber(),
                'excluido'   => $faker->boolean(),
            ];
        })
            ->withClientes(1)
            ->withProdutos(1)
            ->withStatusPedidos(1);
    }

    public function withClientes($parameter = null, int $n = 1): self
    {
        return $this->with('Clientes', ClienteFactory::make($parameter, $n));
    }

    public function withProdutos($parameter = null, int $n = 1): self
    {
        return $this->with('Produtos', ProdutoFactory::make($parameter, $n));
    }

    public function withStatusPedidos($parameter = null, int $n = 1): self
    {
        return $this->with('StatusPedidos', StatusPedidoFactory::make($parameter, $n));
    }
}
