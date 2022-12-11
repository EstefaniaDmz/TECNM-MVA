<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prestamoprefectura Model
 *
 * @method \App\Model\Entity\Prestamoprefectura newEmptyEntity()
 * @method \App\Model\Entity\Prestamoprefectura newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Prestamoprefectura[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prestamoprefectura get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prestamoprefectura[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prestamoprefectura|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prestamoprefectura[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PrestamoprefecturaTable extends Table
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

        $this->setTable('prestamoprefectura');
        $this->setDisplayField('idPrestamoPrefectura');
        $this->setPrimaryKey('idPrestamoPrefectura');
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
            ->integer('idActivoFijo')
            ->requirePresence('idActivoFijo', 'create')
            ->notEmptyString('idActivoFijo');

        $validator
            ->dateTime('fechaSalida')
            ->requirePresence('fechaSalida', 'create')
            ->notEmptyDateTime('fechaSalida');

        $validator
            ->dateTime('fechaRegreso')
            ->allowEmptyDateTime('fechaRegreso');

        $validator
            ->integer('idDocente')
            ->requirePresence('idDocente', 'create')
            ->notEmptyString('idDocente');

        $validator
            ->integer('idPrefecto')
            ->requirePresence('idPrefecto', 'create')
            ->notEmptyString('idPrefecto');

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
