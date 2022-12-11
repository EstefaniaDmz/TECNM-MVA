<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsignaturaFixture
 */
class AsignaturaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asignatura';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAsignatura' => 1,
                'clave' => 'Lorem ip',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'horasPractica' => 1,
                'horasTeoricas' => 1,
                'creditos' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:21',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:21',
            ],
        ];
        parent::init();
    }
}
