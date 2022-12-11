<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PreparatoriaFixture
 */
class PreparatoriaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'preparatoria';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPreparatoria' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'calle' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ip',
                'idAsentamiento' => 1,
                'idTipoPreparatoria' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:53',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:53',
            ],
        ];
        parent::init();
    }
}
