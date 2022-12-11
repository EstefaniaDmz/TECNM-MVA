<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrganizacionFixture
 */
class OrganizacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'organizacion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idOrganizacion' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'rfc' => 'Lorem ipsum',
                'calle' => 'Lorem ipsum dolor sit amet',
                'numeroInterior' => 'Lor',
                'numeroExterior' => 'Lor',
                'idAsentamiento' => 1,
                'idTipoOrganizacion' => 1,
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 07:08:13',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 07:08:13',
            ],
        ];
        parent::init();
    }
}
