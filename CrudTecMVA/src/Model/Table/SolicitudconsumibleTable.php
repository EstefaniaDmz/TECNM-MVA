<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitudconsumible Model
 *
 * @method \App\Model\Entity\Solicitudconsumible newEmptyEntity()
 * @method \App\Model\Entity\Solicitudconsumible newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudconsumible[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudconsumible get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudconsumible[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudconsumible|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudconsumible[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SolicitudconsumibleTable extends Table
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

        $this->setTable('solicitudconsumible');
        $this->setDisplayField('idSolicitudConsumible');
        $this->setPrimaryKey('idSolicitudConsumible');
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
            ->integer('idConsumible')
            ->allowEmptyString('idConsumible');

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
