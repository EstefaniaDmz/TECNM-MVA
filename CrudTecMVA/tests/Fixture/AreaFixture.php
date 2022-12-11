<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AreaFixture
 */
class AreaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'area';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idArea' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'idEdificio' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:31',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:31',
            ],
        ];
        parent::init();
    }
}
