<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asentamiento Entity
 *
 * @property int $idAsentamiento
 * @property int|null $id
 * @property string $nombre
 * @property string $codigoPostal
 * @property int $idTipoAsentamiento
 * @property int $idCiudad
 * @property int $idZona
 * @property bool $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Asentamiento extends Entity
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
        'id' => true,
        'nombre' => true,
        'codigoPostal' => true,
        'idTipoAsentamiento' => true,
        'idCiudad' => true,
        'idZona' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
