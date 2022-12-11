<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposangreFixture
 */
class TiposangreFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tiposangre';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoSangre' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:57:26',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:57:26',
            ],
        ];
        parent::init();
    }
}
