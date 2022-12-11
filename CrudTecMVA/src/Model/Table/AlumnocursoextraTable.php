<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnocursoextra Model
 *
 * @method \App\Model\Entity\Alumnocursoextra newEmptyEntity()
 * @method \App\Model\Entity\Alumnocursoextra newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursoextra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursoextra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursoextra[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursoextra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnocursoextra[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlumnocursoextraTable extends Table
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

        $this->setTable('alumnocursoextra');
        $this->setDisplayField('idAlumnoCursoExtra');
        $this->setPrimaryKey('idAlumnoCursoExtra');
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
            ->integer('idAlumno')
            ->requirePresence('idAlumno', 'create')
            ->notEmptyString('idAlumno');

        $validator
            ->integer('idCursoExtraordinario')
            ->requirePresence('idCursoExtraordinario', 'create')
            ->notEmptyString('idCursoExtraordinario');

        $validator
            ->integer('idPago')
            ->requirePresence('idPago', 'create')
            ->notEmptyString('idPago');

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
