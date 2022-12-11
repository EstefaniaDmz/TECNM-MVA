<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudsoftwareFixture
 */
class SolicitudsoftwareFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'solicitudsoftware';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSolicitudSoftware' => 1,
                'idSolicitudLaboratorio' => 1,
                'idSoftware' => 1,
                'notas' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:58:26',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:58:26',
            ],
        ];
        parent::init();
    }
}
