<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnfermeriaservicioFixture
 */
class EnfermeriaservicioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'enfermeriaservicio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEnfermeriaServicio' => 1,
                'fecha' => '2022-12-11 07:08:57',
                'idEmpleado' => 1,
                'idAlumno' => 1,
                'idServicio' => 1,
                'idTipoUrgencia' => 1,
                'observacion' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:57',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:57',
            ],
        ];
        parent::init();
    }
}
