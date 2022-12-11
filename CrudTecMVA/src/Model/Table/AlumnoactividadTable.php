<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnoactividad Model
 *
 * @method \App\Model\Entity\Alumnoactividad newEmptyEntity()
 * @method \App\Model\Entity\Alumnoactividad newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoactividad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoactividad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumnoactividad findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alumnoactividad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoactividad[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoactividad|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnoactividad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnoactividad[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnoactividad[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnoactividad[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnoactividad[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlumnoactividadTable extends Table
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

        $this->setTable('alumnoactividad');
        $this->setDisplayField('idAlumnoActividad');
        $this->setPrimaryKey('idAlumnoActividad');
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
            ->integer('nivel')
            ->requirePresence('nivel', 'create')
            ->notEmptyString('nivel');

        $validator
            ->scalar('observacion')
            ->maxLength('observacion', 100)
            ->allowEmptyString('observacion');

        $validator
            ->integer('valorCredito')
            ->requirePresence('valorCredito', 'create')
            ->notEmptyString('valorCredito');

        $validator
            ->integer('idPeriodo')
            ->requirePresence('idPeriodo', 'create')
            ->notEmptyString('idPeriodo');

        $validator
            ->integer('idAlumno')
            ->requirePresence('idAlumno', 'create')
            ->notEmptyString('idAlumno');

        $validator
            ->integer('idEmpleado')
            ->requirePresence('idEmpleado', 'create')
            ->notEmptyString('idEmpleado');

        $validator
            ->integer('idActividad')
            ->requirePresence('idActividad', 'create')
            ->notEmptyString('idActividad');

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
