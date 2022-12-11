<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleadodocumento Model
 *
 * @method \App\Model\Entity\Empleadodocumento newEmptyEntity()
 * @method \App\Model\Entity\Empleadodocumento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadodocumento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadodocumento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleadodocumento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleadodocumento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadodocumento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadodocumento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadodocumento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadodocumento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadodocumento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadodocumento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadodocumento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadodocumentoTable extends Table
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

        $this->setTable('empleadodocumento');
        $this->setDisplayField('idEmpleadoDocumento');
        $this->setPrimaryKey('idEmpleadoDocumento');
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
            ->integer('idEmpleado')
            ->requirePresence('idEmpleado', 'create')
            ->notEmptyString('idEmpleado');

        $validator
            ->integer('idDocumento')
            ->requirePresence('idDocumento', 'create')
            ->notEmptyString('idDocumento');

        $validator
            ->date('fechaEntrega')
            ->requirePresence('fechaEntrega', 'create')
            ->notEmptyDate('fechaEntrega');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->allowEmptyString('idUsuarioCrea');

        $validator
            ->dateTime('fechaCrea')
            ->allowEmptyDateTime('fechaCrea');

        $validator
            ->integer('idUsuarioModifica')
            ->allowEmptyString('idUsuarioModifica');

        $validator
            ->dateTime('fechaModifica')
            ->allowEmptyDateTime('fechaModifica');

        return $validator;
    }
}
