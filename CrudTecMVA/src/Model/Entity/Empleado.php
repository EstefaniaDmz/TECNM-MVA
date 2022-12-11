<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $idEmpleado
 * @property string $curp
 * @property string $nss
 * @property string $nombre
 * @property string $apellidoMaterno
 * @property string $apellidoPaterno
 * @property string|null $correoElectronico
 * @property int $salario
 * @property string $telefono
 * @property int $idGenero
 * @property int $idPais
 * @property int $idAsentamiento
 * @property string $calle
 * @property string|null $numeroExterior
 * @property string|null $numeroInterior
 * @property \Cake\I18n\FrozenTime $fechaNacimiento
 * @property int $idEstadoCivil
 * @property int $idPuesto
 * @property int|null $estatus
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Empleado extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'curp' => true,
        'nss' => true,
        'nombre' => true,
        'apellidoMaterno' => true,
        'apellidoPaterno' => true,
        'correoElectronico' => true,
        'salario' => true,
        'telefono' => true,
        'idGenero' => true,
        'idPais' => true,
        'idAsentamiento' => true,
        'calle' => true,
        'numeroExterior' => true,
        'numeroInterior' => true,
        'fechaNacimiento' => true,
        'idEstadoCivil' => true,
        'idPuesto' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
