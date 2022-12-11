<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BibliotecaservicioFixture
 */
class BibliotecaservicioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bibliotecaservicio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idBibliotecaServicio' => 1,
                'fecha' => '2022-12-11 07:10:06',
                'idServicio' => 1,
                'idPuesto' => 1,
                'idCarrera' => 1,
                'idTurno' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:10:06',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:10:06',
            ],
        ];
        parent::init();
    }
}
