<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EdificioFixture
 */
class EdificioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'edificio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEdificio' => 1,
                'nombre' => 'Lorem ip',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:16',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:16',
            ],
        ];
        parent::init();
    }
}
