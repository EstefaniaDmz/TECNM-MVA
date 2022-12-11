<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudlaboratorioFixture
 */
class SolicitudlaboratorioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'solicitudlaboratorio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSolicitudLaboratorio' => 1,
                'idEmpleado' => 1,
                'fecha' => '2022-12-11 06:58:36',
                'numeroAlumnos' => 1,
                'notas' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:58:36',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:58:36',
            ],
        ];
        parent::init();
    }
}
