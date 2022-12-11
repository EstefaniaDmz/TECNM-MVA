<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ficha Model
 *
 * @method \App\Model\Entity\Ficha newEmptyEntity()
 * @method \App\Model\Entity\Ficha newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ficha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ficha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ficha findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ficha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ficha[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ficha|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ficha saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ficha[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ficha[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ficha[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ficha[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FichaTable extends Table
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

        $this->setTable('ficha');
        $this->setDisplayField('idFicha');
        $this->setPrimaryKey('idFicha');
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
            ->scalar('folio')
            ->maxLength('folio', 5)
            ->requirePresence('folio', 'create')
            ->notEmptyString('folio');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->integer('idTurno')
            ->requirePresence('idTurno', 'create')
            ->notEmptyString('idTurno');

        $validator
            ->integer('idCarreraPrimera')
            ->requirePresence('idCarreraPrimera', 'create')
            ->notEmptyString('idCarreraPrimera');

        $validator
            ->integer('idCarreraSegunda')
            ->requirePresence('idCarreraSegunda', 'create')
            ->notEmptyString('idCarreraSegunda');

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
