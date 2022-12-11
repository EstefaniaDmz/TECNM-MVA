<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActividadFixture
 */
class ActividadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'actividad';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idActividad' => 1,
                'idTipoActividad' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'creditoValor' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:12:48',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:12:48',
            ],
        ];
        parent::init();
    }
}
