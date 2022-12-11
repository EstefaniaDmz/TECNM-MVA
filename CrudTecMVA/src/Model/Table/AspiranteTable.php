<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aspirante Model
 *
 * @method \App\Model\Entity\Aspirante newEmptyEntity()
 * @method \App\Model\Entity\Aspirante newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aspirante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aspirante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aspirante findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aspirante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aspirante[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aspirante|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aspirante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aspirante[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aspirante[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aspirante[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aspirante[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AspiranteTable extends Table
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

        $this->setTable('aspirante');
        $this->setDisplayField('idAspirante');
        $this->setPrimaryKey('idAspirante');
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidoPaterno')
            ->maxLength('apellidoPaterno', 50)
            ->requirePresence('apellidoPaterno', 'create')
            ->notEmptyString('apellidoPaterno');

        $validator
            ->scalar('apellidoMaterno')
            ->maxLength('apellidoMaterno', 50)
            ->requirePresence('apellidoMaterno', 'create')
            ->notEmptyString('apellidoMaterno');

        $validator
            ->scalar('curp')
            ->maxLength('curp', 18)
            ->requirePresence('curp', 'create')
            ->notEmptyString('curp')
            ->add('curp', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('correo')
            ->maxLength('correo', 100)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

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
            ->integer('idPreparatoria')
            ->requirePresence('idPreparatoria', 'create')
            ->notEmptyString('idPreparatoria');

        $validator
            ->decimal('promedioGeneral')
            ->requirePresence('promedioGeneral', 'create')
            ->notEmptyString('promedioGeneral');

        $validator
            ->date('fechaEgreso')
            ->allowEmptyDate('fechaEgreso');

        $validator
            ->date('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDate('fechaNacimiento');

        $validator
            ->integer('idCiudadNacimiento')
            ->requirePresence('idCiudadNacimiento', 'create')
            ->notEmptyString('idCiudadNacimiento');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 100)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('numeroInterior')
            ->maxLength('numeroInterior', 5)
            ->allowEmptyString('numeroInterior');

        $validator
            ->scalar('numeroExterior')
            ->maxLength('numeroExterior', 5)
            ->allowEmptyString('numeroExterior');

        $validator
            ->integer('idAsentamiento')
            ->requirePresence('idAsentamiento', 'create')
            ->notEmptyString('idAsentamiento');

        $validator
            ->integer('idPais')
            ->requirePresence('idPais', 'create')
            ->notEmptyString('idPais');

        $validator
            ->boolean('estatus')
            ->notEmptyString('estatus');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['curp']), ['errorField' => 'curp']);

        return $rules;
    }
}
