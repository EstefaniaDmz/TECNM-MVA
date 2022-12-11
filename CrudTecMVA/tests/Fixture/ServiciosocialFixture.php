<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiciosocialFixture
 */
class ServiciosocialFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'serviciosocial';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idServicioSocial' => 1,
                'idAlumno' => 1,
                'fechaInicio' => '2022-12-11 07:07:02',
                'fechaFinal' => '2022-12-11 07:07:02',
                'idOrganizacion' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:02',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:02',
            ],
        ];
        parent::init();
    }
}
