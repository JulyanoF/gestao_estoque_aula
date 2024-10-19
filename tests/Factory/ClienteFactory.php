<?php
declare(strict_types=1);

namespace App\Test\Factory;

use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;
use Faker\Generator;

/**
 * ClienteFactory
 *
 * @method \App\Model\Entity\Cliente getEntity()
 * @method array<\App\Model\Entity\Cliente> getEntities()
 * @method \App\Model\Entity\Cliente|array<\App\Model\Entity\Cliente> persist()
 * @method static \App\Model\Entity\Cliente get(mixed $primaryKey, array $options = [])
 */
class ClienteFactory extends CakephpBaseFactory
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
        return 'Clientes';
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
                'nome'     => $faker->text(120),
                'email'    => $faker->email(),
                'telefone' => $faker->text(15),
                'excluido' => $faker->boolean(),
            ];
        });
    }
}
