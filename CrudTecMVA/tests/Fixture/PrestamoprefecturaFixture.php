<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrestamoprefecturaFixture
 */
class PrestamoprefecturaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'prestamoprefectura';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPrestamoPrefectura' => 1,
                'idActivoFijo' => 1,
                'fechaSalida' => '2022-12-11 07:07:45',
                'fechaRegreso' => '2022-12-11 07:07:45',
                'idDocente' => 1,
                'idPrefecto' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:45',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:45',
            ],
        ];
        parent::init();
    }
}
