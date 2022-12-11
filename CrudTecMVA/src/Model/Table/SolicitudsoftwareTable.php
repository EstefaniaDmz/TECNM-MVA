<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitudsoftware Model
 *
 * @method \App\Model\Entity\Solicitudsoftware newEmptyEntity()
 * @method \App\Model\Entity\Solicitudsoftware newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudsoftware[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudsoftware get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudsoftware[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudsoftware|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudsoftware[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SolicitudsoftwareTable extends Table
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

        $this->setTable('solicitudsoftware');
        $this->setDisplayField('idSolicitudSoftware');
        $this->setPrimaryKey('idSolicitudSoftware');
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
            ->integer('idSolicitudLaboratorio')
            ->requirePresence('idSolicitudLaboratorio', 'create')
            ->notEmptyString('idSolicitudLaboratorio');

        $validator
            ->integer('idSoftware')
            ->allowEmptyString('idSoftware');

        $validator
            ->scalar('notas')
            ->maxLength('notas', 100)
            ->allowEmptyString('notas');

        $validator
            ->integer('estatus')
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
