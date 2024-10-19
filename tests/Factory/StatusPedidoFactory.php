<?php
declare(strict_types=1);

namespace App\Test\Factory;

use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;
use Faker\Generator;

/**
 * StatusPedidoFactory
 *
 * @method \App\Model\Entity\StatusPedido getEntity()
 * @method array<\App\Model\Entity\StatusPedido> getEntities()
 * @method \App\Model\Entity\StatusPedido|array<\App\Model\Entity\StatusPedido> persist()
 * @method static \App\Model\Entity\StatusPedido get(mixed $primaryKey, array $options = [])
 */
class StatusPedidoFactory extends CakephpBaseFactory
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
        return 'StatusPedidos';
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
                'nome' => $faker->text(20),
            ];
        });
    }
}
