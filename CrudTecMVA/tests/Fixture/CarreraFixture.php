<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarreraFixture
 */
class CarreraFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'carrera';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCarrera' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'clave' => '',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:59',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:59',
            ],
        ];
        parent::init();
    }
}
