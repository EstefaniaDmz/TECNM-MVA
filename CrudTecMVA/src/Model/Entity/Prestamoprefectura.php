<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prestamoprefectura Entity
 *
 * @property int $idPrestamoPrefectura
 * @property int $idActivoFijo
 * @property \Cake\I18n\FrozenTime $fechaSalida
 * @property \Cake\I18n\FrozenTime|null $fechaRegreso
 * @property int $idDocente
 * @property int $idPrefecto
 * @property bool|null $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Prestamoprefectura extends Entity
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
        'idActivoFijo' => true,
        'fechaSalida' => true,
        'fechaRegreso' => true,
        'idDocente' => true,
        'idPrefecto' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
