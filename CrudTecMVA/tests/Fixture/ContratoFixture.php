<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratoFixture
 */
class ContratoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contrato';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idContrato' => 1,
                'fechaInicio' => '2022-12-11 07:09:41',
                'fechaFinal' => '2022-12-11 07:09:41',
                'cantidadHoras' => 1,
                'duracion' => 1,
                'salario' => 1,
                'idEmpleado' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:41',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:41',
            ],
        ];
        parent::init();
    }
}
