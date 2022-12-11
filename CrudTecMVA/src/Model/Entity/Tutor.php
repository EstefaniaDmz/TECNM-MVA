<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tutor Entity
 *
 * @property int $idTutor
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property \Cake\I18n\FrozenDate $fechaNacimiento
 * @property string $curp
 * @property string $telefono
 * @property int|null $numeroInterior
 * @property int|null $numeroExterior
 * @property string $calle
 * @property int $idAsentamiento
 * @property bool $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime $fechaModifica
 */
class Tutor extends Entity
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
        'fechaNacimiento' => true,
        'curp' => true,
        'telefono' => true,
        'numeroInterior' => true,
        'numeroExterior' => true,
        'calle' => true,
        'idAsentamiento' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
