<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursoextraordinarioFixture
 */
class CursoextraordinarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cursoextraordinario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCursoExtraordinario' => 1,
                'idTipoCursoMateria' => 1,
                'idDocente' => 1,
                'fechaInicio' => '2022-12-11 07:09:35',
                'fechaFinal' => '2022-12-11 07:09:35',
                'totalHoras' => 1,
                'totalAlumnos' => 1,
                'precio' => 1,
                'precioIndividual' => 1.5,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:35',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:35',
            ],
        ];
        parent::init();
    }
}
