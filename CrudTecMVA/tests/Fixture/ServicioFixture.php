<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicioFixture
 */
class ServicioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'servicio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idServicio' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'idTipoServicio' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:19',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:19',
            ],
        ];
        parent::init();
    }
}
