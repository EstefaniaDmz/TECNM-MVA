<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enfermeriaservicio Model
 *
 * @method \App\Model\Entity\Enfermeriaservicio newEmptyEntity()
 * @method \App\Model\Entity\Enfermeriaservicio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enfermeriaservicio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EnfermeriaservicioTable extends Table
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

        $this->setTable('enfermeriaservicio');
        $this->setDisplayField('idEnfermeriaServicio');
        $this->setPrimaryKey('idEnfermeriaServicio');
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
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->integer('idEmpleado')
            ->allowEmptyString('idEmpleado');

        $validator
            ->integer('idAlumno')
            ->allowEmptyString('idAlumno');

        $validator
            ->integer('idServicio')
            ->requirePresence('idServicio', 'create')
            ->notEmptyString('idServicio');

        $validator
            ->integer('idTipoUrgencia')
            ->requirePresence('idTipoUrgencia', 'create')
            ->notEmptyString('idTipoUrgencia');

        $validator
            ->scalar('observacion')
            ->maxLength('observacion', 250)
            ->requirePresence('observacion', 'create')
            ->notEmptyString('observacion');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->requirePresence('idUsuarioCrea', 'create')
            ->notEmptyString('idUsuarioCrea');

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
