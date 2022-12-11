<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposervicioFixture
 */
class TiposervicioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tiposervicio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoServicio' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:57:21',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:57:21',
            ],
        ];
        parent::init();
    }
}
