<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnocursomateriaFixture
 */
class AlumnocursomateriaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumnocursomateria';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAlumnoCursoMateria' => 1,
                'idAlumno' => 1,
                'idCurso' => 1,
                'idMateria' => 1,
                'calificacion' => 1,
                'idPeriodo' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:56',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:56',
            ],
        ];
        parent::init();
    }
}
