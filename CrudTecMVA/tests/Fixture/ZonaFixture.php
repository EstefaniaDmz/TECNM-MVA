<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZonaFixture
 */
class ZonaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zona';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idZona' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:31:40',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:31:40',
            ],
        ];
        parent::init();
    }
}
