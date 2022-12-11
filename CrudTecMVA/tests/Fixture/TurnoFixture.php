<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TurnoFixture
 */
class TurnoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'turno';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTurno' => 1,
                'nombre' => 'Lorem ipsum dolor ',
                'horaInicio' => '06:32:06',
                'horaFinal' => '06:32:06',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:32:06',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:32:06',
            ],
        ];
        parent::init();
    }
}
