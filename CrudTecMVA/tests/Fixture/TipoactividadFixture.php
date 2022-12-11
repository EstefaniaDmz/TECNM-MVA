<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoactividadFixture
 */
class TipoactividadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipoactividad';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoActividad' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:58:17',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:58:17',
            ],
        ];
        parent::init();
    }
}
