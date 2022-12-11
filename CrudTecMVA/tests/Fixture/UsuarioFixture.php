<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 */
class UsuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idUsuario' => 1,
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'nombreCompleto' => 'Lorem ipsum dolor sit amet',
                'idTipoUsuario' => 1,
                'correo' => 'Lorem ipsum dolor sit amet',
                'clave' => 'Lorem ipsum dolor sit amet',
                'estatus' => 1,
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-12-11 06:31:58',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-12-11 06:31:58',
            ],
        ];
        parent::init();
    }
}
