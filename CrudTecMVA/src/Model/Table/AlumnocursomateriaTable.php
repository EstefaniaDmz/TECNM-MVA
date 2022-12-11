<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnocursomateria Model
 *
 * @method \App\Model\Entity\Alumnocursomaterium newEmptyEntity()
 * @method \App\Model\Entity\Alumnocursomaterium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnocursomaterium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlumnocursomateriaTable extends Table
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

        $this->setTable('alumnocursomateria');
        $this->setDisplayField('idAlumnoCursoMateria');
        $this->setPrimaryKey('idAlumnoCursoMateria');
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
            ->integer('idCurso')
            ->requirePresence('idCurso', 'create')
            ->notEmptyString('idCurso');

        $validator
            ->integer('idMateria')
            ->allowEmptyString('idMateria');

        $validator
            ->integer('calificacion')
            ->requirePresence('calificacion', 'create')
            ->notEmptyString('calificacion');

        $validator
            ->integer('idPeriodo')
            ->requirePresence('idPeriodo', 'create')
            ->notEmptyString('idPeriodo');

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
