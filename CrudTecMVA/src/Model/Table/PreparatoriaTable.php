<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Preparatoria Model
 *
 * @method \App\Model\Entity\Preparatorium newEmptyEntity()
 * @method \App\Model\Entity\Preparatorium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Preparatorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Preparatorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Preparatorium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Preparatorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Preparatorium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Preparatorium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preparatorium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preparatorium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preparatorium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preparatorium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Preparatorium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PreparatoriaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('preparatoria');
        $this->setDisplayField('idPreparatoria');
        $this->setPrimaryKey('idPreparatoria');
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 50)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 10)
            ->allowEmptyString('numero');

        $validator
            ->integer('idAsentamiento')
            ->requirePresence('idAsentamiento', 'create')
            ->notEmptyString('idAsentamiento');

        $validator
            ->integer('idTipoPreparatoria')
            ->requirePresence('idTipoPreparatoria', 'create')
            ->notEmptyString('idTipoPreparatoria');

        $validator
            ->boolean('estatus')
            ->notEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->requirePresence('idUsuarioCrea', 'create')
            ->notEmptyString('idUsuarioCrea');

        $validator
            ->dateTime('fechaCrea')
            ->notEmptyDateTime('fechaCrea');

        $validator
            ->integer('idUsuarioModifica')
            ->requirePresence('idUsuarioModifica', 'create')
            ->notEmptyString('idUsuarioModifica');

        $validator
            ->dateTime('fechaModifica')
            ->requirePresence('fechaModifica', 'create')
            ->notEmptyDateTime('fechaModifica');

        return $validator;
    }
}
