<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeriodoFixture
 */
class PeriodoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'periodo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPeriodo' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:07:59',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:07:59',
            ],
        ];
        parent::init();
    }
}
