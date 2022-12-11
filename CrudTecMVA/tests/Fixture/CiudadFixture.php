<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CiudadFixture
 */
class CiudadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ciudad';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCiudad' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'codigo' => 1,
                'idEstado' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:55',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:55',
            ],
        ];
        parent::init();
    }
}
