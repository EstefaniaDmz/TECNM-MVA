<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumno Model
 *
 * @method \App\Model\Entity\Alumno newEmptyEntity()
 * @method \App\Model\Entity\Alumno newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumno findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumno[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumno[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumno[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alumno[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlumnoTable extends Table
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

        $this->setTable('alumno');
        $this->setDisplayField('idAlumno');
        $this->setPrimaryKey('idAlumno');
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
            ->scalar('matricula')
            ->maxLength('matricula', 20)
            ->requirePresence('matricula', 'create')
            ->notEmptyString('matricula')
            ->add('matricula', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
            ->date('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDate('fechaNacimiento');

        $validator
            ->scalar('curp')
            ->maxLength('curp', 18)
            ->requirePresence('curp', 'create')
            ->notEmptyString('curp')
            ->add('curp', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('rfc')
            ->maxLength('rfc', 13)
            ->requirePresence('rfc', 'create')
            ->notEmptyString('rfc');

        $validator
            ->integer('idGenero')
            ->requirePresence('idGenero', 'create')
            ->notEmptyString('idGenero');

        $validator
            ->scalar('discapacidad')
            ->maxLength('discapacidad', 50)
            ->allowEmptyString('discapacidad');

        $validator
            ->scalar('lenguaIndigena')
            ->maxLength('lenguaIndigena', 50)
            ->allowEmptyString('lenguaIndigena');

        $validator
            ->scalar('nss')
            ->maxLength('nss', 20)
            ->allowEmptyString('nss');

        $validator
            ->integer('idInstitucionSalud')
            ->allowEmptyString('idInstitucionSalud');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 10)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('correoPersonal')
            ->maxLength('correoPersonal', 100)
            ->requirePresence('correoPersonal', 'create')
            ->notEmptyString('correoPersonal');

        $validator
            ->scalar('correoInstitucional')
            ->maxLength('correoInstitucional', 100)
            ->allowEmptyString('correoInstitucional');

        $validator
            ->integer('idCarrera')
            ->requirePresence('idCarrera', 'create')
            ->notEmptyString('idCarrera');

        $validator
            ->integer('semestre')
            ->requirePresence('semestre', 'create')
            ->notEmptyString('semestre');

        $validator
            ->integer('idTurno')
            ->requirePresence('idTurno', 'create')
            ->notEmptyString('idTurno');

        $validator
            ->integer('idPreparatoria')
            ->requirePresence('idPreparatoria', 'create')
            ->notEmptyString('idPreparatoria');

        $validator
            ->decimal('promedioGeneralPrepa')
            ->requirePresence('promedioGeneralPrepa', 'create')
            ->notEmptyString('promedioGeneralPrepa');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 100)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('numeroInterior')
            ->maxLength('numeroInterior', 10)
            ->allowEmptyString('numeroInterior');

        $validator
            ->scalar('numeroExterior')
            ->maxLength('numeroExterior', 10)
            ->allowEmptyString('numeroExterior');

        $validator
            ->integer('idAsentamiento')
            ->requirePresence('idAsentamiento', 'create')
            ->notEmptyString('idAsentamiento');

        $validator
            ->integer('idCiudadNacimiento')
            ->requirePresence('idCiudadNacimiento', 'create')
            ->notEmptyString('idCiudadNacimiento');

        $validator
            ->integer('idTipoSangre')
            ->requirePresence('idTipoSangre', 'create')
            ->notEmptyString('idTipoSangre');

        $validator
            ->scalar('alergia')
            ->maxLength('alergia', 250)
            ->allowEmptyString('alergia');

        $validator
            ->scalar('lugarTrabajo')
            ->maxLength('lugarTrabajo', 200)
            ->allowEmptyString('lugarTrabajo');

        $validator
            ->scalar('horarioTrabajo')
            ->maxLength('horarioTrabajo', 100)
            ->allowEmptyString('horarioTrabajo');

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
        $rules->add($rules->isUnique(['matricula']), ['errorField' => 'matricula']);

        return $rules;
    }
}
