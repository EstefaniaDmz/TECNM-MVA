<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResidenciaFixture
 */
class ResidenciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'residencia';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idResidencia' => 1,
                'idAlumno' => 1,
                'idEmpleado' => 1,
                'idOrganizacion' => 1,
                'fechaInicio' => '2022-12-11 07:07:25',
                'fechaFinal' => '2022-12-11 07:07:25',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:25',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:25',
            ],
        ];
        parent::init();
    }
}
