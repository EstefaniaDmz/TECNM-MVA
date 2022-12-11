<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asignaturacarrera Model
 *
 * @method \App\Model\Entity\Asignaturacarrera newEmptyEntity()
 * @method \App\Model\Entity\Asignaturacarrera newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturacarrera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturacarrera get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturacarrera[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asignaturacarrera|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignaturacarrera[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AsignaturacarreraTable extends Table
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

        $this->setTable('asignaturacarrera');
        $this->setDisplayField('idAsignaturaCarrera');
        $this->setPrimaryKey('idAsignaturaCarrera');
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
            ->integer('idCarrera')
            ->requirePresence('idCarrera', 'create')
            ->notEmptyString('idCarrera');

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
