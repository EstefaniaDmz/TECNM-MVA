<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsignaturadocenteFixture
 */
class AsignaturadocenteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asignaturadocente';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAsignaturaDocente' => 1,
                'idAsignatura' => 1,
                'idDocente' => 1,
                'idHora' => 1,
                'idPeriodo' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:01',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:01',
            ],
        ];
        parent::init();
    }
}
