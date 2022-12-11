<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadodocumentoFixture
 */
class EmpleadodocumentoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleadodocumento';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEmpleadoDocumento' => 1,
                'idEmpleado' => 1,
                'idDocumento' => 1,
                'fechaEntrega' => '2022-12-11',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:03',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:03',
            ],
        ];
        parent::init();
    }
}
