<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visita Model
 *
 * @method \App\Model\Entity\Visitum newEmptyEntity()
 * @method \App\Model\Entity\Visitum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Visitum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visitum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visitum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Visitum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visitum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visitum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VisitaTable extends Table
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

        $this->setTable('visita');
        $this->setDisplayField('idVisita');
        $this->setPrimaryKey('idVisita');
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
            ->integer('idCarrera')
            ->requirePresence('idCarrera', 'create')
            ->notEmptyString('idCarrera');

        $validator
            ->integer('numeroAlumnos')
            ->requirePresence('numeroAlumnos', 'create')
            ->notEmptyString('numeroAlumnos');

        $validator
            ->integer('semestre')
            ->requirePresence('semestre', 'create')
            ->notEmptyString('semestre');

        $validator
            ->dateTime('fechaSolicitada')
            ->requirePresence('fechaSolicitada', 'create')
            ->notEmptyDateTime('fechaSolicitada');

        $validator
            ->scalar('empresaPropuesta')
            ->maxLength('empresaPropuesta', 50)
            ->allowEmptyString('empresaPropuesta');

        $validator
            ->integer('idActivoFijo')
            ->requirePresence('idActivoFijo', 'create')
            ->notEmptyString('idActivoFijo');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 150)
            ->allowEmptyString('objetivo');

        $validator
            ->integer('estatus')
            ->allowEmptyString('estatus');

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
