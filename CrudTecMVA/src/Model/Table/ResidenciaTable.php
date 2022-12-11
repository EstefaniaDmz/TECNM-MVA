<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Residencia Model
 *
 * @method \App\Model\Entity\Residencium newEmptyEntity()
 * @method \App\Model\Entity\Residencium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Residencium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Residencium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Residencium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Residencium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Residencium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Residencium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Residencium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Residencium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Residencium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Residencium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Residencium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ResidenciaTable extends Table
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

        $this->setTable('residencia');
        $this->setDisplayField('idResidencia');
        $this->setPrimaryKey('idResidencia');
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
            ->integer('idEmpleado')
            ->requirePresence('idEmpleado', 'create')
            ->notEmptyString('idEmpleado');

        $validator
            ->integer('idOrganizacion')
            ->requirePresence('idOrganizacion', 'create')
            ->notEmptyString('idOrganizacion');

        $validator
            ->dateTime('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDateTime('fechaInicio');

        $validator
            ->dateTime('fechaFinal')
            ->requirePresence('fechaFinal', 'create')
            ->notEmptyDateTime('fechaFinal');

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
