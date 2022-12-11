<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnoactividadFixture
 */
class AlumnoactividadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumnoactividad';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAlumnoActividad' => 1,
                'nivel' => 1,
                'observacion' => 'Lorem ipsum dolor sit amet',
                'valorCredito' => 1,
                'idPeriodo' => 1,
                'idAlumno' => 1,
                'idEmpleado' => 1,
                'idActividad' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:12:31',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:12:31',
            ],
        ];
        parent::init();
    }
}
