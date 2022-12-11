<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bibliotecaservicio Model
 *
 * @method \App\Model\Entity\Bibliotecaservicio newEmptyEntity()
 * @method \App\Model\Entity\Bibliotecaservicio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bibliotecaservicio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BibliotecaservicioTable extends Table
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

        $this->setTable('bibliotecaservicio');
        $this->setDisplayField('idBibliotecaServicio');
        $this->setPrimaryKey('idBibliotecaServicio');
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
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->integer('idServicio')
            ->requirePresence('idServicio', 'create')
            ->notEmptyString('idServicio');

        $validator
            ->integer('idPuesto')
            ->allowEmptyString('idPuesto');

        $validator
            ->integer('idCarrera')
            ->allowEmptyString('idCarrera');

        $validator
            ->integer('idTurno')
            ->requirePresence('idTurno', 'create')
            ->notEmptyString('idTurno');

        $validator
            ->boolean('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->requirePresence('idUsuarioCrea', 'create')
            ->notEmptyString('idUsuarioCrea');

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
