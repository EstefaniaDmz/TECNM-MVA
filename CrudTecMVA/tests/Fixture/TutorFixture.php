<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TutorFixture
 */
class TutorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tutor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTutor' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'fechaNacimiento' => '2022-12-11',
                'curp' => '',
                'telefono' => '',
                'numeroInterior' => 1,
                'numeroExterior' => 1,
                'calle' => 'Lorem ipsum dolor sit amet',
                'idAsentamiento' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:32:03',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:32:03',
            ],
        ];
        parent::init();
    }
}
