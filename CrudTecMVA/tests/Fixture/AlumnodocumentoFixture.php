<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnodocumentoFixture
 */
class AlumnodocumentoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumnodocumento';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idAlumnoDocumento' => 1,
                'idAlumno' => 1,
                'idDocumento' => 1,
                'fechaEntrega' => '2022-12-11',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:11:38',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:11:38',
            ],
        ];
        parent::init();
    }
}
