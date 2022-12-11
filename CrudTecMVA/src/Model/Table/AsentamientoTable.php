<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asentamiento Model
 *
 * @method \App\Model\Entity\Asentamiento newEmptyEntity()
 * @method \App\Model\Entity\Asentamiento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asentamiento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Asentamiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asentamiento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asentamiento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asentamiento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asentamiento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asentamiento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AsentamientoTable extends Table
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

        $this->setTable('asentamiento');
        $this->setDisplayField('idAsentamiento');
        $this->setPrimaryKey('idAsentamiento');
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
            ->integer('id')
            ->allowEmptyString('id');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('codigoPostal')
            ->maxLength('codigoPostal', 5)
            ->requirePresence('codigoPostal', 'create')
            ->notEmptyString('codigoPostal');

        $validator
            ->integer('idTipoAsentamiento')
            ->requirePresence('idTipoAsentamiento', 'create')
            ->notEmptyString('idTipoAsentamiento');

        $validator
            ->integer('idCiudad')
            ->requirePresence('idCiudad', 'create')
            ->notEmptyString('idCiudad');

        $validator
            ->integer('idZona')
            ->requirePresence('idZona', 'create')
            ->notEmptyString('idZona');

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
