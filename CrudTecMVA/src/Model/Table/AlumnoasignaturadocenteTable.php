<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnoasignaturadocente Model
 *
 * @method \App\Model\Entity\Alumnoasignaturadocente newEmptyEntity()
 * @method \App\Model\Entity\Alumnoasignaturadocente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnoasignaturadocente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlumnoasignaturadocenteTable extends Table
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

        $this->setTable('alumnoasignaturadocente');
        $this->setDisplayField('idAlumnoAsignaturaDocente');
        $this->setPrimaryKey('idAlumnoAsignaturaDocente');
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
            ->integer('idAsignaturaDocente')
            ->requirePresence('idAsignaturaDocente', 'create')
            ->notEmptyString('idAsignaturaDocente');

        $validator
            ->integer('idAlumno')
            ->requirePresence('idAlumno', 'create')
            ->notEmptyString('idAlumno');

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
