<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartamentoFixture
 */
class DepartamentoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'departamento';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idDepartamento' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'idEdificio' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:09:27',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:09:27',
            ],
        ];
        parent::init();
    }
}
