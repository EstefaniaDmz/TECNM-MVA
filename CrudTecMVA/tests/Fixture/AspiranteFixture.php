<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AspiranteFixture
 */
class AspiranteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aspirante';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAspirante' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'curp' => '',
                'correo' => 'Lorem ipsum dolor sit amet',
                'telefono' => '',
                'idGenero' => 1,
                'idPreparatoria' => 1,
                'promedioGeneral' => 1.5,
                'fechaEgreso' => '2022-12-11',
                'fechaNacimiento' => '2022-12-11',
                'idCiudadNacimiento' => 1,
                'calle' => 'Lorem ipsum dolor sit amet',
                'numeroInterior' => '',
                'numeroExterior' => '',
                'idAsentamiento' => 1,
                'idPais' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:10:12',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:10:12',
            ],
        ];
        parent::init();
    }
}
