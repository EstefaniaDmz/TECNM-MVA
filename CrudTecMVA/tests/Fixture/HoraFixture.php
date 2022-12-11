<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HoraFixture
 */
class HoraFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'hora';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idHora' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:32',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:32',
            ],
        ];
        parent::init();
    }
}
