<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoactivofijoFixture
 */
class TipoactivofijoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipoactivofijo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoActivoFijo' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:58:12',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:58:12',
            ],
        ];
        parent::init();
    }
}
