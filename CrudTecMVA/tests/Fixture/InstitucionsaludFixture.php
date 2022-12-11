<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstitucionsaludFixture
 */
class InstitucionsaludFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'institucionsalud';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idInstitucionSalud' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:27',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:27',
            ],
        ];
        parent::init();
    }
}
