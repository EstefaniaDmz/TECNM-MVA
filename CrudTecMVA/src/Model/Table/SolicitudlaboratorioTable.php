<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitudlaboratorio Model
 *
 * @method \App\Model\Entity\Solicitudlaboratorio newEmptyEntity()
 * @method \App\Model\Entity\Solicitudlaboratorio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Solicitudlaboratorio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SolicitudlaboratorioTable extends Table
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

        $this->setTable('solicitudlaboratorio');
        $this->setDisplayField('idSolicitudLaboratorio');
        $this->setPrimaryKey('idSolicitudLaboratorio');
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
            ->integer('idEmpleado')
            ->allowEmptyString('idEmpleado');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->integer('numeroAlumnos')
            ->requirePresence('numeroAlumnos', 'create')
            ->notEmptyString('numeroAlumnos');

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
