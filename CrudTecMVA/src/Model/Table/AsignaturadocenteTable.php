<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asignaturadocente Model
 *
 * @method \App\Model\Entity\Asignaturadocente newEmptyEntity()
 * @method \App\Model\Entity\Asignaturadocente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturadocente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturadocente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asignaturadocente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Asignaturadocente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturadocente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturadocente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignaturadocente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignaturadocente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignaturadocente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignaturadocente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignaturadocente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AsignaturadocenteTable extends Table
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

        $this->setTable('asignaturadocente');
        $this->setDisplayField('idAsignaturaDocente');
        $this->setPrimaryKey('idAsignaturaDocente');
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
            ->integer('idAsignatura')
            ->requirePresence('idAsignatura', 'create')
            ->notEmptyString('idAsignatura');

        $validator
            ->integer('idDocente')
            ->requirePresence('idDocente', 'create')
            ->notEmptyString('idDocente');

        $validator
            ->integer('idHora')
            ->requirePresence('idHora', 'create')
            ->notEmptyString('idHora');

        $validator
            ->integer('idPeriodo')
            ->requirePresence('idPeriodo', 'create')
            ->notEmptyString('idPeriodo');

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
