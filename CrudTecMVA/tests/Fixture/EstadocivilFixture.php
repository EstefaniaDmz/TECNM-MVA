<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstadocivilFixture
 */
class EstadocivilFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'estadocivil';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEstadoCivil' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:46',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:46',
            ],
        ];
        parent::init();
    }
}
