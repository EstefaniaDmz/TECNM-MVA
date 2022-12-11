<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConsumibleFixture
 */
class ConsumibleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'consumible';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idConsumible' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'cantidad' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:50',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:50',
            ],
        ];
        parent::init();
    }
}
