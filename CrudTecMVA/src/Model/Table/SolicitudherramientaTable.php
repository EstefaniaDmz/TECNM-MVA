<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitudherramienta Model
 *
 * @method \App\Model\Entity\Solicitudherramientum newEmptyEntity()
 * @method \App\Model\Entity\Solicitudherramientum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudherramientum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudherramientum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudherramientum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudherramientum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudherramientum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SolicitudherramientaTable extends Table
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

        $this->setTable('solicitudherramienta');
        $this->setDisplayField('idSolicitudHerramienta');
        $this->setPrimaryKey('idSolicitudHerramienta');
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
            ->integer('idActivoFijo')
            ->allowEmptyString('idActivoFijo');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

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
