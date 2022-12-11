<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organizacion Entity
 *
 * @property int $idOrganizacion
 * @property string $nombre
 * @property string $rfc
 * @property string $calle
 * @property string $numeroInterior
 * @property string|null $numeroExterior
 * @property int $idAsentamiento
 * @property int $idTipoOrganizacion
 * @property bool|null $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Organizacion extends Entity
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
        'rfc' => true,
        'calle' => true,
        'numeroInterior' => true,
        'numeroExterior' => true,
        'idAsentamiento' => true,
        'idTipoOrganizacion' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
