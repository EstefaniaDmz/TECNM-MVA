<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipocursomateriaFixture
 */
class TipocursomateriaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipocursomateria';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoCursoMateria' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:57:57',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:57:57',
            ],
        ];
        parent::init();
    }
}
