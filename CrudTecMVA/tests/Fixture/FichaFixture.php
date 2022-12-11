<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FichaFixture
 */
class FichaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ficha';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idFicha' => 1,
                'folio' => '',
                'fecha' => '2022-12-11',
                'idTurno' => 1,
                'idCarreraPrimera' => 1,
                'idCarreraSegunda' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:41',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:41',
            ],
        ];
        parent::init();
    }
}
