<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursoextraordinario Model
 *
 * @method \App\Model\Entity\Cursoextraordinario newEmptyEntity()
 * @method \App\Model\Entity\Cursoextraordinario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cursoextraordinario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cursoextraordinario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cursoextraordinario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cursoextraordinario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cursoextraordinario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CursoextraordinarioTable extends Table
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

        $this->setTable('cursoextraordinario');
        $this->setDisplayField('idCursoExtraordinario');
        $this->setPrimaryKey('idCursoExtraordinario');
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
            ->integer('idTipoCursoMateria')
            ->requirePresence('idTipoCursoMateria', 'create')
            ->notEmptyString('idTipoCursoMateria');

        $validator
            ->integer('idDocente')
            ->requirePresence('idDocente', 'create')
            ->notEmptyString('idDocente');

        $validator
            ->dateTime('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDateTime('fechaInicio');

        $validator
            ->dateTime('fechaFinal')
            ->requirePresence('fechaFinal', 'create')
            ->notEmptyDateTime('fechaFinal');

        $validator
            ->integer('totalHoras')
            ->requirePresence('totalHoras', 'create')
            ->notEmptyString('totalHoras');

        $validator
            ->integer('totalAlumnos')
            ->requirePresence('totalAlumnos', 'create')
            ->notEmptyString('totalAlumnos');

        $validator
            ->integer('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->decimal('precioIndividual')
            ->requirePresence('precioIndividual', 'create')
            ->notEmptyString('precioIndividual');

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
