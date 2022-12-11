<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SoftwareFixture
 */
class SoftwareFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'software';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idSoftware' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'marca' => 'Lorem ipsum dolor sit amet',
                'version' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:41:05',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:41:05',
            ],
        ];
        parent::init();
    }
}
