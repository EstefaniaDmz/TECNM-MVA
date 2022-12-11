<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Serviciosocial Model
 *
 * @method \App\Model\Entity\Serviciosocial newEmptyEntity()
 * @method \App\Model\Entity\Serviciosocial newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Serviciosocial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Serviciosocial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Serviciosocial findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Serviciosocial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Serviciosocial[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Serviciosocial|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Serviciosocial saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Serviciosocial[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Serviciosocial[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Serviciosocial[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Serviciosocial[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ServiciosocialTable extends Table
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

        $this->setTable('serviciosocial');
        $this->setDisplayField('idServicioSocial');
        $this->setPrimaryKey('idServicioSocial');
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
            ->dateTime('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDateTime('fechaInicio');

        $validator
            ->dateTime('fechaFinal')
            ->requirePresence('fechaFinal', 'create')
            ->notEmptyDateTime('fechaFinal');

        $validator
            ->integer('idOrganizacion')
            ->requirePresence('idOrganizacion', 'create')
            ->notEmptyString('idOrganizacion');

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
