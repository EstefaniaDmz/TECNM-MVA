<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsentamientoFixture
 */
class AsentamientoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asentamiento';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAsentamiento' => 1,
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'codigoPostal' => '',
                'idTipoAsentamiento' => 1,
                'idCiudad' => 1,
                'idZona' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:28',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:28',
            ],
        ];
        parent::init();
    }
}
