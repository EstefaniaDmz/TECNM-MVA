<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SoftwareequipoFixture
 */
class SoftwareequipoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'softwareequipo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSoftwareEquipo' => 1,
                'idSoftware' => 1,
                'idActivoFijo' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:05:45',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:05:45',
            ],
        ];
        parent::init();
    }
}
