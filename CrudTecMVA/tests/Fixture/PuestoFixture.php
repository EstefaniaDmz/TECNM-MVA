<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PuestoFixture
 */
class PuestoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'puesto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPuesto' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:39',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:39',
            ],
        ];
        parent::init();
    }
}
