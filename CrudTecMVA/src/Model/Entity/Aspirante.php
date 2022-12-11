<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aspirante Entity
 *
 * @property int $idAspirante
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property string $curp
 * @property string $correo
 * @property string $telefono
 * @property int $idGenero
 * @property int $idPreparatoria
 * @property string $promedioGeneral
 * @property \Cake\I18n\FrozenDate|null $fechaEgreso
 * @property \Cake\I18n\FrozenDate $fechaNacimiento
 * @property int $idCiudadNacimiento
 * @property string $calle
 * @property string|null $numeroInterior
 * @property string|null $numeroExterior
 * @property int $idAsentamiento
 * @property int $idPais
 * @property bool $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime $fechaModifica
 */
class Aspirante extends Entity
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
        'nombre' => true,
        'apellidoPaterno' => true,
        'apellidoMaterno' => true,
        'curp' => true,
        'correo' => true,
        'telefono' => true,
        'idGenero' => true,
        'idPreparatoria' => true,
        'promedioGeneral' => true,
        'fechaEgreso' => true,
        'fechaNacimiento' => true,
        'idCiudadNacimiento' => true,
        'calle' => true,
        'numeroInterior' => true,
        'numeroExterior' => true,
        'idAsentamiento' => true,
        'idPais' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
