<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudherramientaFixture
 */
class SolicitudherramientaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'solicitudherramienta';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSolicitudHerramienta' => 1,
                'idSolicitudLaboratorio' => 1,
                'idActivoFijo' => 1,
                'fecha' => '2022-12-11 06:58:42',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:58:42',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:58:42',
            ],
        ];
        parent::init();
    }
}
