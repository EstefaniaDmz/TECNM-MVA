<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnotutorFixture
 */
class AlumnotutorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumnotutor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAlumnoTutor' => 1,
                'idAlumno' => 1,
                'idTutor' => 1,
                'parentesco' => 'Lorem ipsum dolor sit amet',
                'contactoEmergencia' => 1,
                'recogeDocumento' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:52:20',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:52:20',
            ],
        ];
        parent::init();
    }
}
