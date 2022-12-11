<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnodocumento Model
 *
 * @method \App\Model\Entity\Alumnodocumento newEmptyEntity()
 * @method \App\Model\Entity\Alumnodocumento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnodocumento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumnodocumento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumnodocumento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alumnodocumento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnodocumento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumnodocumento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnodocumento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumnodocumento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnodocumento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnodocumento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumnodocumento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlumnodocumentoTable extends Table
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

        $this->setTable('alumnodocumento');
        $this->setDisplayField('idAlumnoDocumento');
        $this->setPrimaryKey('idAlumnoDocumento');
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
            ->integer('idDocumento')
            ->requirePresence('idDocumento', 'create')
            ->notEmptyString('idDocumento');

        $validator
            ->date('fechaEntrega')
            ->requirePresence('fechaEntrega', 'create')
            ->notEmptyDate('fechaEntrega');

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
