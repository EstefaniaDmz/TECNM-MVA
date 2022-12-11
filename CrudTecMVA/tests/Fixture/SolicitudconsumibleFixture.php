<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudconsumibleFixture
 */
class SolicitudconsumibleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'solicitudconsumible';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSolicitudConsumible' => 1,
                'idSolicitudLaboratorio' => 1,
                'idConsumible' => 1,
                'notas' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:58:48',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:58:48',
            ],
        ];
        parent::init();
    }
}
