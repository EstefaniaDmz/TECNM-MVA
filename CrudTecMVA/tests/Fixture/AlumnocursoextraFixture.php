<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnocursoextraFixture
 */
class AlumnocursoextraFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumnocursoextra';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAlumnoCursoExtra' => 1,
                'idAlumno' => 1,
                'idCursoExtraordinario' => 1,
                'idPago' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:12:04',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:12:04',
            ],
        ];
        parent::init();
    }
}
