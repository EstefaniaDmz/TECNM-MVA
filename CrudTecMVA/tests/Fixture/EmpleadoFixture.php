<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoFixture
 */
class EmpleadoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleado';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEmpleado' => 1,
                'curp' => '',
                'nss' => '',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'correoElectronico' => 'Lorem ipsum dolor sit amet',
                'salario' => 1,
                'telefono' => '',
                'idGenero' => 1,
                'idPais' => 1,
                'idAsentamiento' => 1,
                'calle' => 'Lorem ipsum dolor sit amet',
                'numeroExterior' => 'Lorem ip',
                'numeroInterior' => 'Lorem ip',
                'fechaNacimiento' => '2022-12-11 07:09:11',
                'idEstadoCivil' => 1,
                'idPuesto' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:11',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:11',
            ],
        ];
        parent::init();
    }
}
