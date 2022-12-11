<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisitaFixture
 */
class VisitaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'visita';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idVisita' => 1,
                'idEmpleado' => 1,
                'idCarrera' => 1,
                'numeroAlumnos' => 1,
                'semestre' => 1,
                'fechaSolicitada' => '2022-12-11 06:31:53',
                'empresaPropuesta' => 'Lorem ipsum dolor sit amet',
                'idActivoFijo' => 1,
                'objetivo' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:31:53',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:31:53',
            ],
        ];
        parent::init();
    }
}
