<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnoFixture
 */
class AlumnoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumno';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAlumno' => 1,
                'matricula' => 'Lorem ipsum dolor ',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'fechaNacimiento' => '2022-12-11',
                'curp' => '',
                'rfc' => '',
                'idGenero' => 1,
                'discapacidad' => 'Lorem ipsum dolor sit amet',
                'lenguaIndigena' => 'Lorem ipsum dolor sit amet',
                'nss' => 'Lorem ipsum dolor ',
                'idInstitucionSalud' => 1,
                'telefono' => '',
                'correoPersonal' => 'Lorem ipsum dolor sit amet',
                'correoInstitucional' => 'Lorem ipsum dolor sit amet',
                'idCarrera' => 1,
                'semestre' => 1,
                'idTurno' => 1,
                'idPreparatoria' => 1,
                'promedioGeneralPrepa' => 1.5,
                'calle' => 'Lorem ipsum dolor sit amet',
                'numeroInterior' => '',
                'numeroExterior' => '',
                'idAsentamiento' => 1,
                'idCiudadNacimiento' => 1,
                'idTipoSangre' => 1,
                'alergia' => 'Lorem ipsum dolor sit amet',
                'lugarTrabajo' => 'Lorem ipsum dolor sit amet',
                'horarioTrabajo' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:12:36',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:12:36',
            ],
        ];
        parent::init();
    }
}
