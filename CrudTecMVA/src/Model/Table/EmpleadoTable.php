<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleado Model
 *
 * @method \App\Model\Entity\Empleado newEmptyEntity()
 * @method \App\Model\Entity\Empleado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoTable extends Table
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

        $this->setTable('empleado');
        $this->setDisplayField('idEmpleado');
        $this->setPrimaryKey('idEmpleado');
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
            ->scalar('curp')
            ->maxLength('curp', 18)
            ->requirePresence('curp', 'create')
            ->notEmptyString('curp');

        $validator
            ->scalar('nss')
            ->maxLength('nss', 11)
            ->requirePresence('nss', 'create')
            ->notEmptyString('nss');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidoMaterno')
            ->maxLength('apellidoMaterno', 50)
            ->requirePresence('apellidoMaterno', 'create')
            ->notEmptyString('apellidoMaterno');

        $validator
            ->scalar('apellidoPaterno')
            ->maxLength('apellidoPaterno', 50)
            ->requirePresence('apellidoPaterno', 'create')
            ->notEmptyString('apellidoPaterno');

        $validator
            ->scalar('correoElectronico')
            ->maxLength('correoElectronico', 50)
            ->allowEmptyString('correoElectronico');

        $validator
            ->integer('salario')
            ->requirePresence('salario', 'create')
            ->notEmptyString('salario');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 10)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->integer('idGenero')
            ->requirePresence('idGenero', 'create')
            ->notEmptyString('idGenero');

        $validator
            ->integer('idPais')
            ->requirePresence('idPais', 'create')
            ->notEmptyString('idPais');

        $validator
            ->integer('idAsentamiento')
            ->requirePresence('idAsentamiento', 'create')
            ->notEmptyString('idAsentamiento');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 50)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('numeroExterior')
            ->maxLength('numeroExterior', 10)
            ->allowEmptyString('numeroExterior');

        $validator
            ->scalar('numeroInterior')
            ->maxLength('numeroInterior', 10)
            ->allowEmptyString('numeroInterior');

        $validator
            ->dateTime('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDateTime('fechaNacimiento');

        $validator
            ->integer('idEstadoCivil')
            ->requirePresence('idEstadoCivil', 'create')
            ->notEmptyString('idEstadoCivil');

        $validator
            ->integer('idPuesto')
            ->requirePresence('idPuesto', 'create')
            ->notEmptyString('idPuesto');

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
