<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipourgenciaFixture
 */
class TipourgenciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipourgencia';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoUrgencia' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:57:15',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:57:15',
            ],
        ];
        parent::init();
    }
}
