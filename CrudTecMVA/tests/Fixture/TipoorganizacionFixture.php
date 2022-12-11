<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoorganizacionFixture
 */
class TipoorganizacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipoorganizacion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoOrganizacion' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:57:43',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:57:43',
            ],
        ];
        parent::init();
    }
}
