<?php
declare(strict_types=1);

namespace App\Test\Factory;

use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;
use Faker\Generator;

/**
 * ProdutoFactory
 *
 * @method \App\Model\Entity\Produto getEntity()
 * @method array<\App\Model\Entity\Produto> getEntities()
 * @method \App\Model\Entity\Produto|array<\App\Model\Entity\Produto> persist()
 * @method static \App\Model\Entity\Produto get(mixed $primaryKey, array $options = [])
 */
class ProdutoFactory extends CakephpBaseFactory
{
    protected array $marshallerOptions = [
        'validate'         => true,
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
        return 'Produtos';
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
                'nome'      => $faker->text(120),
                'descricao' => $faker->text(),
                'preco'     => $faker->randomNumber(),
                'estoque'   => $faker->randomNumber(),
                'excluido'  => $faker->boolean(),
            ];
        });
    }
}
