<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivofijoFixture
 */
class ActivofijoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'activofijo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idActivoFijo' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'marca' => 'Lorem ipsum dolor sit amet',
                'modelo' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'idArea' => 1,
                'idTipoActivoFijo' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:12:42',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:12:42',
            ],
        ];
        parent::init();
    }
}
