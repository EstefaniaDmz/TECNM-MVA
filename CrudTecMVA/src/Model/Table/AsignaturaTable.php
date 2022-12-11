<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asignatura Model
 *
 * @method \App\Model\Entity\Asignatura newEmptyEntity()
 * @method \App\Model\Entity\Asignatura newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Asignatura[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asignatura get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asignatura findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Asignatura patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asignatura[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asignatura|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignatura saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignatura[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignatura[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignatura[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignatura[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AsignaturaTable extends Table
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

        $this->setTable('asignatura');
        $this->setDisplayField('idAsignatura');
        $this->setPrimaryKey('idAsignatura');
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
            ->scalar('clave')
            ->maxLength('clave', 10)
            ->requirePresence('clave', 'create')
            ->notEmptyString('clave');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->integer('horasPractica')
            ->requirePresence('horasPractica', 'create')
            ->notEmptyString('horasPractica');

        $validator
            ->integer('horasTeoricas')
            ->requirePresence('horasTeoricas', 'create')
            ->notEmptyString('horasTeoricas');

        $validator
            ->integer('creditos')
            ->requirePresence('creditos', 'create')
            ->notEmptyString('creditos');

        $validator
            ->boolean('estatus')
            ->notEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->requirePresence('idUsuarioCrea', 'create')
            ->notEmptyString('idUsuarioCrea');

        $validator
            ->dateTime('fechaCrea')
            ->requirePresence('fechaCrea', 'create')
            ->notEmptyDateTime('fechaCrea');

        $validator
            ->integer('idUsuarioModifica')
            ->allowEmptyString('idUsuarioModifica');

        $validator
            ->dateTime('fechaModifica')
            ->allowEmptyDateTime('fechaModifica');

        return $validator;
    }
}
