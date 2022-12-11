<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Softwareequipo Model
 *
 * @method \App\Model\Entity\Softwareequipo newEmptyEntity()
 * @method \App\Model\Entity\Softwareequipo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Softwareequipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Softwareequipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Softwareequipo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Softwareequipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Softwareequipo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Softwareequipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Softwareequipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Softwareequipo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Softwareequipo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Softwareequipo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Softwareequipo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SoftwareequipoTable extends Table
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

        $this->setTable('softwareequipo');
        $this->setDisplayField('idSoftwareEquipo');
        $this->setPrimaryKey('idSoftwareEquipo');
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
            ->integer('idSoftware')
            ->requirePresence('idSoftware', 'create')
            ->notEmptyString('idSoftware');

        $validator
            ->integer('idActivoFijo')
            ->requirePresence('idActivoFijo', 'create')
            ->notEmptyString('idActivoFijo');

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
