<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tiposdesangreconectado Entity
 *
 * @property int|null $idTipoSangre
 * @property string|null $tipo
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenDate|null $fechaCrea
 */
class Tiposdesangreconectado extends Entity
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
        'idTipoSangre' => true,
        'tipo' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
    ];
}
