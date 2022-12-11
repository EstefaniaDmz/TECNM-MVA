<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsignaturacarreraFixture
 */
class AsignaturacarreraFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asignaturacarrera';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAsignaturaCarrera' => 1,
                'idAsignatura' => 1,
                'idCarrera' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:06',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:06',
            ],
        ];
        parent::init();
    }
}
