<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StatusPedidos Model
 *
 * @method \App\Model\Entity\StatusPedido newEmptyEntity()
 * @method \App\Model\Entity\StatusPedido newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\StatusPedido> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StatusPedido get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\StatusPedido findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\StatusPedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\StatusPedido> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StatusPedido|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\StatusPedido saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\StatusPedido>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\StatusPedido>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\StatusPedido>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\StatusPedido> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\StatusPedido>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\StatusPedido>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\StatusPedido>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\StatusPedido> deleteManyOrFail(iterable $entities, array $options = [])
 */
class StatusPedidosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('status_pedidos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome')
            ->maxLength('nome', 20)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        return $validator;
    }
}
