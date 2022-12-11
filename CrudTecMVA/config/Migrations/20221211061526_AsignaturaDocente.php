<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AsignaturaDocente extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {
        $this->table('Actividad', ['id' => false, 'primary_key' => ['idActividad']])
            ->addColumn('idActividad', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoActividad', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('creditoValor', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idTipoActividad',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idActividad',
                ]
            )
            ->create();

        $this->table('ActivoFijo', ['id' => false, 'primary_key' => ['idActivoFijo']])
            ->addColumn('idActivoFijo', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('marca', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('modelo', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('descripcion', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('idArea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoActivoFijo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idArea',
                ]
            )
            ->addIndex(
                [
                    'idTipoActivoFijo',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idActivoFijo',
                ]
            )
            ->create();

        $this->table('Alumno', ['id' => false, 'primary_key' => ['idAlumno']])
            ->addColumn('idAlumno', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('matricula', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('fechaNacimiento', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('curp', 'char', [
                'default' => null,
                'limit' => 18,
                'null' => false,
            ])
            ->addColumn('rfc', 'char', [
                'default' => null,
                'limit' => 13,
                'null' => false,
            ])
            ->addColumn('idGenero', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('discapacidad', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('lenguaIndigena', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('nss', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('idInstitucionSalud', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('correoPersonal', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('correoInstitucional', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('idCarrera', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('semestre', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTurno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPreparatoria', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('promedioGeneralPrepa', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 4,
                'scale' => 2,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('numeroInterior', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('numeroExterior', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCiudadNacimiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoSangre', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('alergia', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('lugarTrabajo', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('horarioTrabajo', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'curp',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'matricula',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'idGenero',
                ]
            )
            ->addIndex(
                [
                    'idInstitucionSalud',
                ]
            )
            ->addIndex(
                [
                    'idCarrera',
                ]
            )
            ->addIndex(
                [
                    'idTurno',
                ]
            )
            ->addIndex(
                [
                    'idPreparatoria',
                ]
            )
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idCiudadNacimiento',
                ]
            )
            ->addIndex(
                [
                    'idTipoSangre',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->create();

        $this->table('AlumnoActividad', ['id' => false, 'primary_key' => ['idAlumnoActividad']])
            ->addColumn('idAlumnoActividad', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nivel', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('observacion', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('valorCredito', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPeriodo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idActividad', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumnoActividad',
                ]
            )
            ->create();

        $this->table('AlumnoAsignaturaDocente', ['id' => false, 'primary_key' => ['idAlumnoAsignaturaDocente']])
            ->addColumn('idAlumnoAsignaturaDocente', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAsignaturaDocente', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAsignaturaDocente',
                ]
            )
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAlumnoAsignaturaDocente',
                ]
            )
            ->create();

        $this->table('AlumnoCursoExtra', ['id' => false, 'primary_key' => ['idAlumnoCursoExtra']])
            ->addColumn('idAlumnoCursoExtra', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCursoExtraordinario', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPago', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idCursoExtraordinario',
                ]
            )
            ->addIndex(
                [
                    'idPago',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAlumnoCursoExtra',
                ]
            )
            ->create();

        $this->table('AlumnoCursoMateria', ['id' => false, 'primary_key' => ['idAlumnoCursoMateria']])
            ->addColumn('idAlumnoCursoMateria', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCurso', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idMateria', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('calificacion', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPeriodo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumnoCursoMateria',
                ]
            )
            ->create();

        $this->table('AlumnoDocumento', ['id' => false, 'primary_key' => ['idAlumnoDocumento']])
            ->addColumn('idAlumnoDocumento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idDocumento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaEntrega', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idDocumento',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAlumnoDocumento',
                ]
            )
            ->create();

        $this->table('AlumnoTutor', ['id' => false, 'primary_key' => ['idAlumnoTutor']])
            ->addColumn('idAlumnoTutor', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTutor', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('parentesco', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('contactoEmergencia', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('recogeDocumento', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idTutor',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAlumnoTutor',
                ]
            )
            ->create();

        $this->table('Area', ['id' => false, 'primary_key' => ['idArea']])
            ->addColumn('idArea', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('idEdificio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEdificio',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idArea',
                ]
            )
            ->create();

        $this->table('Asentamiento', ['id' => false, 'primary_key' => ['idAsentamiento']])
            ->addColumn('idAsentamiento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('codigoPostal', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('idTipoAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCiudad', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idZona', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idTipoAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idCiudad',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->create();

        $this->table('Asignatura', ['id' => false, 'primary_key' => ['idAsignatura']])
            ->addColumn('idAsignatura', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('clave', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('horasPractica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('horasTeoricas', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('creditos', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAsignatura',
                ]
            )
            ->create();

        $this->table('AsignaturaCarrera', ['id' => false, 'primary_key' => ['idAsignaturaCarrera']])
            ->addColumn('idAsignaturaCarrera', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAsignatura', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCarrera', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idAsignatura',
                ]
            )
            ->addIndex(
                [
                    'idCarrera',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAsignaturaCarrera',
                ]
            )
            ->create();

        $this->table('AsignaturaDocente', ['id' => false, 'primary_key' => ['idAsignaturaDocente']])
            ->addColumn('idAsignaturaDocente', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAsignatura', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idDocente', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idHora', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPeriodo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAsignatura',
                ]
            )
            ->addIndex(
                [
                    'idDocente',
                ]
            )
            ->addIndex(
                [
                    'idHora',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAsignaturaDocente',
                ]
            )
            ->create();

        $this->table('Aspirante', ['id' => false, 'primary_key' => ['idAspirante']])
            ->addColumn('idAspirante', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('curp', 'char', [
                'default' => null,
                'limit' => 18,
                'null' => false,
            ])
            ->addColumn('correo', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idGenero', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPreparatoria', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('promedioGeneral', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 4,
                'scale' => 2,
            ])
            ->addColumn('fechaEgreso', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('fechaNacimiento', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idCiudadNacimiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('numeroInterior', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('numeroExterior', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('idAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPais', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'curp',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'idGenero',
                ]
            )
            ->addIndex(
                [
                    'idPreparatoria',
                ]
            )
            ->addIndex(
                [
                    'idCiudadNacimiento',
                ]
            )
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idPais',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idAspirante',
                ]
            )
            ->create();

        $this->table('BibliotecaServicio', ['id' => false, 'primary_key' => ['idBibliotecaServicio']])
            ->addColumn('idBibliotecaServicio', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fecha', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idServicio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPuesto', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idCarrera', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idTurno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idServicio',
                ]
            )
            ->addIndex(
                [
                    'idCarrera',
                ]
            )
            ->addIndex(
                [
                    'idTurno',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idBibliotecaServicio',
                ]
            )
            ->create();

        $this->table('Carrera', ['id' => false, 'primary_key' => ['idCarrera']])
            ->addColumn('idCarrera', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('clave', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idCarrera',
                ]
            )
            ->create();

        $this->table('Ciudad', ['id' => false, 'primary_key' => ['idCiudad']])
            ->addColumn('idCiudad', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('codigo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEstado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEstado',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idCiudad',
                ]
            )
            ->create();

        $this->table('Consumible', ['id' => false, 'primary_key' => ['idConsumible']])
            ->addColumn('idConsumible', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('descripcion', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('cantidad', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idConsumible',
                ]
            )
            ->create();

        $this->table('Contrato', ['id' => false, 'primary_key' => ['idContrato']])
            ->addColumn('idContrato', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaInicio', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fechaFinal', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('cantidadHoras', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('duracion', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('salario', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idContrato',
                ]
            )
            ->create();

        $this->table('CursoExtraordinario', ['id' => false, 'primary_key' => ['idCursoExtraordinario']])
            ->addColumn('idCursoExtraordinario', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoCursoMateria', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idDocente', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaInicio', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fechaFinal', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('totalHoras', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('totalAlumnos', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('precio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('precioIndividual', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 18,
                'scale' => 0,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idDocente',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idCursoExtraordinario',
                ]
            )
            ->create();

        $this->table('Departamento', ['id' => false, 'primary_key' => ['idDepartamento']])
            ->addColumn('idDepartamento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('idEdificio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEdificio',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idDepartamento',
                ]
            )
            ->create();

        $this->table('Documento', ['id' => false, 'primary_key' => ['idDocumento']])
            ->addColumn('idDocumento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('descripcion', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('idTipoDocumento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idTipoDocumento',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idDocumento',
                ]
            )
            ->create();

        $this->table('Edificio', ['id' => false, 'primary_key' => ['idEdificio']])
            ->addColumn('idEdificio', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idEdificio',
                ]
            )
            ->create();

        $this->table('Empleado', ['id' => false, 'primary_key' => ['idEmpleado']])
            ->addColumn('idEmpleado', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('curp', 'char', [
                'default' => null,
                'limit' => 18,
                'null' => false,
            ])
            ->addColumn('nss', 'char', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('correoElectronico', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('salario', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idGenero', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPais', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('numeroExterior', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('numeroInterior', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaNacimiento', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idEstadoCivil', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPuesto', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idGenero',
                ]
            )
            ->addIndex(
                [
                    'idPais',
                ]
            )
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idEstadoCivil',
                ]
            )
            ->addIndex(
                [
                    'idPuesto',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->create();

        $this->table('EmpleadoDocumento', ['id' => false, 'primary_key' => ['idEmpleadoDocumento']])
            ->addColumn('idEmpleadoDocumento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idDocumento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaEntrega', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->addIndex(
                [
                    'idDocumento',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idEmpleadoDocumento',
                ]
            )
            ->create();

        $this->table('EnfermeriaServicio', ['id' => false, 'primary_key' => ['idEnfermeriaServicio']])
            ->addColumn('idEnfermeriaServicio', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fecha', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idServicio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoUrgencia', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('observacion', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idServicio',
                ]
            )
            ->addIndex(
                [
                    'idTipoUrgencia',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idEnfermeriaServicio',
                ]
            )
            ->create();

        $this->table('Estado', ['id' => false, 'primary_key' => ['idEstado']])
            ->addColumn('idEstado', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idEstado',
                ]
            )
            ->create();

        $this->table('EstadoCivil', ['id' => false, 'primary_key' => ['idEstadoCivil']])
            ->addColumn('idEstadoCivil', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idEstadoCivil',
                ]
            )
            ->create();

        $this->table('Ficha', ['id' => false, 'primary_key' => ['idFicha']])
            ->addColumn('idFicha', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('folio', 'char', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('fecha', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idTurno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCarreraPrimera', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCarreraSegunda', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idTurno',
                ]
            )
            ->addIndex(
                [
                    'idCarreraPrimera',
                ]
            )
            ->addIndex(
                [
                    'idCarreraSegunda',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idFicha',
                ]
            )
            ->create();

        $this->table('Genero', ['id' => false, 'primary_key' => ['idGenero']])
            ->addColumn('idGenero', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idGenero',
                ]
            )
            ->create();

        $this->table('Hora', ['id' => false, 'primary_key' => ['idHora']])
            ->addColumn('idHora', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idHora',
                ]
            )
            ->create();

        $this->table('InstitucionSalud', ['id' => false, 'primary_key' => ['idInstitucionSalud']])
            ->addColumn('idInstitucionSalud', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idInstitucionSalud',
                ]
            )
            ->create();

        $this->table('Justificante', ['id' => false, 'primary_key' => ['idJustificante']])
            ->addColumn('idJustificante', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('motivo', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('fecha', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idJustificante',
                ]
            )
            ->create();

        $this->table('Organizacion', ['id' => false, 'primary_key' => ['idOrganizacion']])
            ->addColumn('idOrganizacion', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('rfc', 'string', [
                'default' => null,
                'limit' => 13,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('numeroInterior', 'string', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('numeroExterior', 'string', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('idAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoOrganizacion', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idTipoOrganizacion',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idOrganizacion',
                ]
            )
            ->create();

        $this->table('Pago', ['id' => false, 'primary_key' => ['idPago']])
            ->addColumn('idPago', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoPago', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('folio', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('monto', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idTipoPago',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idPago',
                ]
            )
            ->create();

        $this->table('Pais', ['id' => false, 'primary_key' => ['idPais']])
            ->addColumn('idPais', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idPais',
                ]
            )
            ->create();

        $this->table('Periodo', ['id' => false, 'primary_key' => ['idPeriodo']])
            ->addColumn('idPeriodo', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idPeriodo',
                ]
            )
            ->create();

        $this->table('Preparatoria', ['id' => false, 'primary_key' => ['idPreparatoria']])
            ->addColumn('idPreparatoria', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('numero', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idTipoPreparatoria', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idTipoPreparatoria',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idPreparatoria',
                ]
            )
            ->create();

        $this->table('PrestamoPrefectura', ['id' => false, 'primary_key' => ['idPrestamoPrefectura']])
            ->addColumn('idPrestamoPrefectura', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idActivoFijo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaSalida', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fechaRegreso', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idDocente', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idPrefecto', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idActivoFijo',
                ]
            )
            ->addIndex(
                [
                    'idDocente',
                ]
            )
            ->addIndex(
                [
                    'idPrefecto',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idPrestamoPrefectura',
                ]
            )
            ->create();

        $this->table('Puesto', ['id' => false, 'primary_key' => ['idPuesto']])
            ->addColumn('idPuesto', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idPuesto',
                ]
            )
            ->create();

        $this->table('Residencia', ['id' => false, 'primary_key' => ['idResidencia']])
            ->addColumn('idResidencia', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idOrganizacion', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaInicio', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fechaFinal', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->addIndex(
                [
                    'idOrganizacion',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idResidencia',
                ]
            )
            ->create();

        $this->table('Servicio', ['id' => false, 'primary_key' => ['idServicio']])
            ->addColumn('idServicio', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('idTipoServicio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idTipoServicio',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idServicio',
                ]
            )
            ->create();

        $this->table('ServicioSocial', ['id' => false, 'primary_key' => ['idServicioSocial']])
            ->addColumn('idServicioSocial', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idAlumno', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaInicio', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fechaFinal', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idOrganizacion', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idAlumno',
                ]
            )
            ->addIndex(
                [
                    'idOrganizacion',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idServicioSocial',
                ]
            )
            ->create();

        $this->table('Software', ['id' => false, 'primary_key' => ['idSoftware']])
            ->addColumn('idSoftware', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('marca', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('version', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('descripcion', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idSoftware',
                ]
            )
            ->addIndex(
                [
                    'idSoftware',
                ]
            )
            ->create();

        $this->table('SoftwareEquipo', ['id' => false, 'primary_key' => ['idSoftwareEquipo']])
            ->addColumn('idSoftwareEquipo', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idSoftware', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idActivoFijo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idSoftware',
                ]
            )
            ->addIndex(
                [
                    'idActivoFijo',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->create();

        $this->table('SolicitudConsumible', ['id' => false, 'primary_key' => ['idSolicitudConsumible']])
            ->addColumn('idSolicitudConsumible', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idSolicitudLaboratorio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idConsumible', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('notas', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idSolicitudLaboratorio',
                ]
            )
            ->addIndex(
                [
                    'idConsumible',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idSolicitudConsumible',
                ]
            )
            ->create();

        $this->table('SolicitudHerramienta', ['id' => false, 'primary_key' => ['idSolicitudHerramienta']])
            ->addColumn('idSolicitudHerramienta', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idSolicitudLaboratorio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idActivoFijo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fecha', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idSolicitudLaboratorio',
                ]
            )
            ->addIndex(
                [
                    'idActivoFijo',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idSolicitudHerramienta',
                ]
            )
            ->create();

        $this->table('SolicitudLaboratorio', ['id' => false, 'primary_key' => ['idSolicitudLaboratorio']])
            ->addColumn('idSolicitudLaboratorio', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fecha', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('numeroAlumnos', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('notas', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idSolicitudLaboratorio',
                ]
            )
            ->create();

        $this->table('SolicitudSoftware', ['id' => false, 'primary_key' => ['idSolicitudSoftware']])
            ->addColumn('idSolicitudSoftware', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idSolicitudLaboratorio', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idSoftware', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('notas', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idSolicitudLaboratorio',
                ]
            )
            ->addIndex(
                [
                    'idSoftware',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idSolicitudSoftware',
                ]
            )
            ->create();

        $this->table('TipoActividad', ['id' => false, 'primary_key' => ['idTipoActividad']])
            ->addColumn('idTipoActividad', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoActividad',
                ]
            )
            ->create();

        $this->table('TipoActivoFijo', ['id' => false, 'primary_key' => ['idTipoActivoFijo']])
            ->addColumn('idTipoActivoFijo', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoActivoFijo',
                ]
            )
            ->create();

        $this->table('TipoAsentamiento', ['id' => false, 'primary_key' => ['idTipoAsentamiento']])
            ->addColumn('idTipoAsentamiento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoAsentamiento',
                ]
            )
            ->create();

        $this->table('TipoCursoMateria', ['id' => false, 'primary_key' => ['idTipoCursoMateria']])
            ->addColumn('idTipoCursoMateria', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoCursoMateria',
                ]
            )
            ->create();

        $this->table('TipoDocumento', ['id' => false, 'primary_key' => ['idTipoDocumento']])
            ->addColumn('idTipoDocumento', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoDocumento',
                ]
            )
            ->create();

        $this->table('TipoOrganizacion', ['id' => false, 'primary_key' => ['idTipoOrganizacion']])
            ->addColumn('idTipoOrganizacion', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoOrganizacion',
                ]
            )
            ->create();

        $this->table('TipoPago', ['id' => false, 'primary_key' => ['idTipoPago']])
            ->addColumn('idTipoPago', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoPago',
                ]
            )
            ->create();

        $this->table('TipoPreparatoria', ['id' => false, 'primary_key' => ['idTipoPreparatoria']])
            ->addColumn('idTipoPreparatoria', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoPreparatoria',
                ]
            )
            ->create();

        $this->table('TipoSangre', ['id' => false, 'primary_key' => ['idTipoSangre']])
            ->addColumn('idTipoSangre', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoSangre',
                ]
            )
            ->create();

        $this->table('TipoServicio', ['id' => false, 'primary_key' => ['idTipoServicio']])
            ->addColumn('idTipoServicio', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoServicio',
                ]
            )
            ->create();

        $this->table('TipoUrgencia', ['id' => false, 'primary_key' => ['idTipoUrgencia']])
            ->addColumn('idTipoUrgencia', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoUrgencia',
                ]
            )
            ->create();

        $this->table('TipoUsuario', ['id' => false, 'primary_key' => ['idTipoUsuario']])
            ->addColumn('idTipoUsuario', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTipoUsuario',
                ]
            )
            ->create();

        $this->table('Turno', ['id' => false, 'primary_key' => ['idTurno']])
            ->addColumn('idTurno', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('horaInicio', 'time', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('horaFinal', 'time', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTurno',
                ]
            )
            ->create();

        $this->table('Tutor', ['id' => false, 'primary_key' => ['idTutor']])
            ->addColumn('idTutor', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('fechaNacimiento', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('curp', 'char', [
                'default' => null,
                'limit' => 18,
                'null' => false,
            ])
            ->addColumn('telefono', 'char', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('numeroInterior', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('numeroExterior', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('calle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('idAsentamiento', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'curp',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'idAsentamiento',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idTutor',
                ]
            )
            ->create();

        $this->table('Usuario', ['id' => false, 'primary_key' => ['idUsuario']])
            ->addColumn('idUsuario', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('apellidoMaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('apellidoPaterno', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('nombreCompleto', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('idTipoUsuario', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('correo', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('clave', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idTipoUsuario',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idUsuario',
                ]
            )
            ->create();

        $this->table('Visita', ['id' => false, 'primary_key' => ['idVisita']])
            ->addColumn('idVisita', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idEmpleado', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('idCarrera', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('numeroAlumnos', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('semestre', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaSolicitada', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('empresaPropuesta', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('idActivoFijo', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('objetivo', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('estatus', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => 'getdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'idEmpleado',
                ]
            )
            ->addIndex(
                [
                    'idCarrera',
                ]
            )
            ->addIndex(
                [
                    'idActivoFijo',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idVisita',
                ]
            )
            ->create();

        $this->table('Zona', ['id' => false, 'primary_key' => ['idZona']])
            ->addColumn('idZona', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('estatus', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioCrea', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fechaCrea', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('idUsuarioModifica', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('fechaModifica', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'idUsuarioCrea',
                ]
            )
            ->addIndex(
                [
                    'idUsuarioModifica',
                ]
            )
            ->addIndex(
                [
                    'idZona',
                ]
            )
            ->create();

        $this->table('Actividad')
            ->addForeignKey(
                'idTipoActividad',
                'TipoActividad',
                'idTipoActividad',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('ActivoFijo')
            ->addForeignKey(
                'idArea',
                'Area',
                'idArea',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTipoActivoFijo',
                'TipoActivoFijo',
                'idTipoActivoFijo',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Alumno')
            ->addForeignKey(
                'idGenero',
                'Genero',
                'idGenero',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idInstitucionSalud',
                'InstitucionSalud',
                'idInstitucionSalud',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCarrera',
                'Carrera',
                'idCarrera',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTurno',
                'Turno',
                'idTurno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPreparatoria',
                'Preparatoria',
                'idPreparatoria',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idAsentamiento',
                'Asentamiento',
                'idAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCiudadNacimiento',
                'Ciudad',
                'idCiudad',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTipoSangre',
                'TipoSangre',
                'idTipoSangre',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('AlumnoAsignaturaDocente')
            ->addForeignKey(
                'idAsignaturaDocente',
                'AsignaturaDocente',
                'idAsignaturaDocente',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('AlumnoCursoExtra')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCursoExtraordinario',
                'CursoExtraordinario',
                'idCursoExtraordinario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPago',
                'Pago',
                'idPago',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('AlumnoDocumento')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idDocumento',
                'Documento',
                'idDocumento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('AlumnoTutor')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTutor',
                'Tutor',
                'idTutor',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Area')
            ->addForeignKey(
                'idEdificio',
                'Edificio',
                'idEdificio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Asentamiento')
            ->addForeignKey(
                'idTipoAsentamiento',
                'TipoAsentamiento',
                'idTipoAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCiudad',
                'Ciudad',
                'idCiudad',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Asignatura')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('AsignaturaCarrera')
            ->addForeignKey(
                'idAsignatura',
                'Asignatura',
                'idAsignatura',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCarrera',
                'Carrera',
                'idCarrera',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('AsignaturaDocente')
            ->addForeignKey(
                'idAsignatura',
                'Asignatura',
                'idAsignatura',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idDocente',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idHora',
                'Hora',
                'idHora',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Aspirante')
            ->addForeignKey(
                'idGenero',
                'Genero',
                'idGenero',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPreparatoria',
                'Preparatoria',
                'idPreparatoria',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCiudadNacimiento',
                'Ciudad',
                'idCiudad',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idAsentamiento',
                'Asentamiento',
                'idAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPais',
                'Pais',
                'idPais',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('BibliotecaServicio')
            ->addForeignKey(
                'idServicio',
                'Servicio',
                'idServicio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCarrera',
                'Carrera',
                'idCarrera',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTurno',
                'Turno',
                'idTurno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Carrera')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Ciudad')
            ->addForeignKey(
                'idEstado',
                'Estado',
                'idEstado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Consumible')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Contrato')
            ->addForeignKey(
                'idEmpleado',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('CursoExtraordinario')
            ->addForeignKey(
                'idDocente',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Departamento')
            ->addForeignKey(
                'idEdificio',
                'Edificio',
                'idEdificio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Documento')
            ->addForeignKey(
                'idTipoDocumento',
                'TipoDocumento',
                'idTipoDocumento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Edificio')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Empleado')
            ->addForeignKey(
                'idGenero',
                'Genero',
                'idGenero',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPais',
                'Pais',
                'idPais',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idAsentamiento',
                'Asentamiento',
                'idAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idEstadoCivil',
                'EstadoCivil',
                'idEstadoCivil',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPuesto',
                'Puesto',
                'idPuesto',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('EmpleadoDocumento')
            ->addForeignKey(
                'idEmpleado',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idDocumento',
                'Documento',
                'idDocumento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('EnfermeriaServicio')
            ->addForeignKey(
                'idEmpleado',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idServicio',
                'Servicio',
                'idServicio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTipoUrgencia',
                'TipoUrgencia',
                'idTipoUrgencia',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Estado')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('EstadoCivil')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Ficha')
            ->addForeignKey(
                'idTurno',
                'Turno',
                'idTurno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCarreraPrimera',
                'Carrera',
                'idCarrera',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCarreraSegunda',
                'Carrera',
                'idCarrera',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Genero')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Hora')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('InstitucionSalud')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Justificante')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Organizacion')
            ->addForeignKey(
                'idAsentamiento',
                'Asentamiento',
                'idAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTipoOrganizacion',
                'TipoOrganizacion',
                'idTipoOrganizacion',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Pago')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTipoPago',
                'TipoPago',
                'idTipoPago',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Pais')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Periodo')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Preparatoria')
            ->addForeignKey(
                'idAsentamiento',
                'Asentamiento',
                'idAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idTipoPreparatoria',
                'TipoPreparatoria',
                'idTipoPreparatoria',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('PrestamoPrefectura')
            ->addForeignKey(
                'idActivoFijo',
                'ActivoFijo',
                'idActivoFijo',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idDocente',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idPrefecto',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Puesto')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Residencia')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idEmpleado',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idOrganizacion',
                'Organizacion',
                'idOrganizacion',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Servicio')
            ->addForeignKey(
                'idTipoServicio',
                'TipoServicio',
                'idTipoServicio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('ServicioSocial')
            ->addForeignKey(
                'idAlumno',
                'Alumno',
                'idAlumno',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idOrganizacion',
                'Organizacion',
                'idOrganizacion',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Software')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('SoftwareEquipo')
            ->addForeignKey(
                'idSoftware',
                'Software',
                'idSoftware',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idActivoFijo',
                'ActivoFijo',
                'idActivoFijo',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('SolicitudConsumible')
            ->addForeignKey(
                'idSolicitudLaboratorio',
                'SolicitudLaboratorio',
                'idSolicitudLaboratorio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idConsumible',
                'Consumible',
                'idConsumible',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('SolicitudHerramienta')
            ->addForeignKey(
                'idSolicitudLaboratorio',
                'SolicitudLaboratorio',
                'idSolicitudLaboratorio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idActivoFijo',
                'ActivoFijo',
                'idActivoFijo',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('SolicitudLaboratorio')
            ->addForeignKey(
                'idEmpleado',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('SolicitudSoftware')
            ->addForeignKey(
                'idSolicitudLaboratorio',
                'SolicitudLaboratorio',
                'idSolicitudLaboratorio',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idSoftware',
                'Software',
                'idSoftware',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoActividad')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoActivoFijo')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoAsentamiento')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoCursoMateria')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoDocumento')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoOrganizacion')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoPago')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoPreparatoria')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoSangre')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoServicio')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoUrgencia')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('TipoUsuario')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Turno')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Tutor')
            ->addForeignKey(
                'idAsentamiento',
                'Asentamiento',
                'idAsentamiento',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Usuario')
            ->addForeignKey(
                'idTipoUsuario',
                'TipoUsuario',
                'idTipoUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Visita')
            ->addForeignKey(
                'idEmpleado',
                'Empleado',
                'idEmpleado',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idCarrera',
                'Carrera',
                'idCarrera',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idActivoFijo',
                'ActivoFijo',
                'idActivoFijo',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('Zona')
            ->addForeignKey(
                'idUsuarioCrea',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'idUsuarioModifica',
                'Usuario',
                'idUsuario',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {
        $this->table('Actividad')
            ->dropForeignKey(
                'idTipoActividad'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('ActivoFijo')
            ->dropForeignKey(
                'idArea'
            )
            ->dropForeignKey(
                'idTipoActivoFijo'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Alumno')
            ->dropForeignKey(
                'idGenero'
            )
            ->dropForeignKey(
                'idInstitucionSalud'
            )
            ->dropForeignKey(
                'idCarrera'
            )
            ->dropForeignKey(
                'idTurno'
            )
            ->dropForeignKey(
                'idPreparatoria'
            )
            ->dropForeignKey(
                'idAsentamiento'
            )
            ->dropForeignKey(
                'idCiudadNacimiento'
            )
            ->dropForeignKey(
                'idTipoSangre'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('AlumnoAsignaturaDocente')
            ->dropForeignKey(
                'idAsignaturaDocente'
            )
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('AlumnoCursoExtra')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idCursoExtraordinario'
            )
            ->dropForeignKey(
                'idPago'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('AlumnoDocumento')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idDocumento'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('AlumnoTutor')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idTutor'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Area')
            ->dropForeignKey(
                'idEdificio'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Asentamiento')
            ->dropForeignKey(
                'idTipoAsentamiento'
            )
            ->dropForeignKey(
                'idCiudad'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Asignatura')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('AsignaturaCarrera')
            ->dropForeignKey(
                'idAsignatura'
            )
            ->dropForeignKey(
                'idCarrera'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('AsignaturaDocente')
            ->dropForeignKey(
                'idAsignatura'
            )
            ->dropForeignKey(
                'idDocente'
            )
            ->dropForeignKey(
                'idHora'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Aspirante')
            ->dropForeignKey(
                'idGenero'
            )
            ->dropForeignKey(
                'idPreparatoria'
            )
            ->dropForeignKey(
                'idCiudadNacimiento'
            )
            ->dropForeignKey(
                'idAsentamiento'
            )
            ->dropForeignKey(
                'idPais'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('BibliotecaServicio')
            ->dropForeignKey(
                'idServicio'
            )
            ->dropForeignKey(
                'idCarrera'
            )
            ->dropForeignKey(
                'idTurno'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Carrera')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Ciudad')
            ->dropForeignKey(
                'idEstado'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Consumible')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Contrato')
            ->dropForeignKey(
                'idEmpleado'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('CursoExtraordinario')
            ->dropForeignKey(
                'idDocente'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Departamento')
            ->dropForeignKey(
                'idEdificio'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Documento')
            ->dropForeignKey(
                'idTipoDocumento'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Edificio')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Empleado')
            ->dropForeignKey(
                'idGenero'
            )
            ->dropForeignKey(
                'idPais'
            )
            ->dropForeignKey(
                'idAsentamiento'
            )
            ->dropForeignKey(
                'idEstadoCivil'
            )
            ->dropForeignKey(
                'idPuesto'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('EmpleadoDocumento')
            ->dropForeignKey(
                'idEmpleado'
            )
            ->dropForeignKey(
                'idDocumento'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('EnfermeriaServicio')
            ->dropForeignKey(
                'idEmpleado'
            )
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idServicio'
            )
            ->dropForeignKey(
                'idTipoUrgencia'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Estado')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('EstadoCivil')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Ficha')
            ->dropForeignKey(
                'idTurno'
            )
            ->dropForeignKey(
                'idCarreraPrimera'
            )
            ->dropForeignKey(
                'idCarreraSegunda'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Genero')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Hora')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('InstitucionSalud')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Justificante')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Organizacion')
            ->dropForeignKey(
                'idAsentamiento'
            )
            ->dropForeignKey(
                'idTipoOrganizacion'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Pago')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idTipoPago'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Pais')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Periodo')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Preparatoria')
            ->dropForeignKey(
                'idAsentamiento'
            )
            ->dropForeignKey(
                'idTipoPreparatoria'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('PrestamoPrefectura')
            ->dropForeignKey(
                'idActivoFijo'
            )
            ->dropForeignKey(
                'idDocente'
            )
            ->dropForeignKey(
                'idPrefecto'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Puesto')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Residencia')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idEmpleado'
            )
            ->dropForeignKey(
                'idOrganizacion'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Servicio')
            ->dropForeignKey(
                'idTipoServicio'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('ServicioSocial')
            ->dropForeignKey(
                'idAlumno'
            )
            ->dropForeignKey(
                'idOrganizacion'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Software')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('SoftwareEquipo')
            ->dropForeignKey(
                'idSoftware'
            )
            ->dropForeignKey(
                'idActivoFijo'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('SolicitudConsumible')
            ->dropForeignKey(
                'idSolicitudLaboratorio'
            )
            ->dropForeignKey(
                'idConsumible'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('SolicitudHerramienta')
            ->dropForeignKey(
                'idSolicitudLaboratorio'
            )
            ->dropForeignKey(
                'idActivoFijo'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('SolicitudLaboratorio')
            ->dropForeignKey(
                'idEmpleado'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('SolicitudSoftware')
            ->dropForeignKey(
                'idSolicitudLaboratorio'
            )
            ->dropForeignKey(
                'idSoftware'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoActividad')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoActivoFijo')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoAsentamiento')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoCursoMateria')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoDocumento')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoOrganizacion')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoPago')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoPreparatoria')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoSangre')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoServicio')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoUrgencia')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('TipoUsuario')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Turno')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Tutor')
            ->dropForeignKey(
                'idAsentamiento'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Usuario')
            ->dropForeignKey(
                'idTipoUsuario'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Visita')
            ->dropForeignKey(
                'idEmpleado'
            )
            ->dropForeignKey(
                'idCarrera'
            )
            ->dropForeignKey(
                'idActivoFijo'
            )
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Zona')
            ->dropForeignKey(
                'idUsuarioCrea'
            )
            ->dropForeignKey(
                'idUsuarioModifica'
            )->save();

        $this->table('Actividad')->drop()->save();
        $this->table('ActivoFijo')->drop()->save();
        $this->table('Alumno')->drop()->save();
        $this->table('AlumnoActividad')->drop()->save();
        $this->table('AlumnoAsignaturaDocente')->drop()->save();
        $this->table('AlumnoCursoExtra')->drop()->save();
        $this->table('AlumnoCursoMateria')->drop()->save();
        $this->table('AlumnoDocumento')->drop()->save();
        $this->table('AlumnoTutor')->drop()->save();
        $this->table('Area')->drop()->save();
        $this->table('Asentamiento')->drop()->save();
        $this->table('Asignatura')->drop()->save();
        $this->table('AsignaturaCarrera')->drop()->save();
        $this->table('AsignaturaDocente')->drop()->save();
        $this->table('Aspirante')->drop()->save();
        $this->table('BibliotecaServicio')->drop()->save();
        $this->table('Carrera')->drop()->save();
        $this->table('Ciudad')->drop()->save();
        $this->table('Consumible')->drop()->save();
        $this->table('Contrato')->drop()->save();
        $this->table('CursoExtraordinario')->drop()->save();
        $this->table('Departamento')->drop()->save();
        $this->table('Documento')->drop()->save();
        $this->table('Edificio')->drop()->save();
        $this->table('Empleado')->drop()->save();
        $this->table('EmpleadoDocumento')->drop()->save();
        $this->table('EnfermeriaServicio')->drop()->save();
        $this->table('Estado')->drop()->save();
        $this->table('EstadoCivil')->drop()->save();
        $this->table('Ficha')->drop()->save();
        $this->table('Genero')->drop()->save();
        $this->table('Hora')->drop()->save();
        $this->table('InstitucionSalud')->drop()->save();
        $this->table('Justificante')->drop()->save();
        $this->table('Organizacion')->drop()->save();
        $this->table('Pago')->drop()->save();
        $this->table('Pais')->drop()->save();
        $this->table('Periodo')->drop()->save();
        $this->table('Preparatoria')->drop()->save();
        $this->table('PrestamoPrefectura')->drop()->save();
        $this->table('Puesto')->drop()->save();
        $this->table('Residencia')->drop()->save();
        $this->table('Servicio')->drop()->save();
        $this->table('ServicioSocial')->drop()->save();
        $this->table('Software')->drop()->save();
        $this->table('SoftwareEquipo')->drop()->save();
        $this->table('SolicitudConsumible')->drop()->save();
        $this->table('SolicitudHerramienta')->drop()->save();
        $this->table('SolicitudLaboratorio')->drop()->save();
        $this->table('SolicitudSoftware')->drop()->save();
        $this->table('TipoActividad')->drop()->save();
        $this->table('TipoActivoFijo')->drop()->save();
        $this->table('TipoAsentamiento')->drop()->save();
        $this->table('TipoCursoMateria')->drop()->save();
        $this->table('TipoDocumento')->drop()->save();
        $this->table('TipoOrganizacion')->drop()->save();
        $this->table('TipoPago')->drop()->save();
        $this->table('TipoPreparatoria')->drop()->save();
        $this->table('TipoSangre')->drop()->save();
        $this->table('TipoServicio')->drop()->save();
        $this->table('TipoUrgencia')->drop()->save();
        $this->table('TipoUsuario')->drop()->save();
        $this->table('Turno')->drop()->save();
        $this->table('Tutor')->drop()->save();
        $this->table('Usuario')->drop()->save();
        $this->table('Visita')->drop()->save();
        $this->table('Zona')->drop()->save();
    }
}
