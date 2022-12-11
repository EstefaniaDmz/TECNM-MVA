<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JustificanteFixture
 */
class JustificanteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'justificante';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idJustificante' => 1,
                'idAlumno' => 1,
                'motivo' => 'Lorem ipsum dolor sit amet',
                'fecha' => '2022-12-11 07:08:21',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:21',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:21',
            ],
        ];
        parent::init();
    }
}
