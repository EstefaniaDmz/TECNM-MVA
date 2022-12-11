<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiposdesangreconectados Model
 *
 * @method \App\Model\Entity\Tiposdesangreconectado newEmptyEntity()
 * @method \App\Model\Entity\Tiposdesangreconectado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tiposdesangreconectado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TiposdesangreconectadosTable extends Table
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

        $this->setTable('tiposdesangreconectados');
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
            ->integer('idTipoSangre')
            ->allowEmptyString('idTipoSangre');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 50)
            ->allowEmptyString('tipo');

        $validator
            ->integer('idUsuarioCrea')
            ->allowEmptyString('idUsuarioCrea');

        $validator
            ->date('fechaCrea')
            ->allowEmptyDate('fechaCrea');

        return $validator;
    }
}
