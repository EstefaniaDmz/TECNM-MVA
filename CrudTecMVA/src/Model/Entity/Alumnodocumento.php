<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumnodocumento Entity
 *
 * @property int $idAlumnoDocumento
 * @property int $idAlumno
 * @property int $idDocumento
 * @property \Cake\I18n\FrozenDate $fechaEntrega
 * @property bool $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Alumnodocumento extends Entity
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
        'idAlumno' => true,
        'idDocumento' => true,
        'fechaEntrega' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
