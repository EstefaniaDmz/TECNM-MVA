<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagoFixture
 */
class PagoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pago';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPago' => 1,
                'idAlumno' => 1,
                'idTipoPago' => 1,
                'folio' => 'Lorem ipsum dolor sit amet',
                'monto' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:08',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:08',
            ],
        ];
        parent::init();
    }
}
