<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Serviciosocial Entity
 *
 * @property int $idServicioSocial
 * @property int $idAlumno
 * @property \Cake\I18n\FrozenTime $fechaInicio
 * @property \Cake\I18n\FrozenTime $fechaFinal
 * @property int $idOrganizacion
 * @property int|null $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime $fechaModifica
 */
class Serviciosocial extends Entity
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
        'fechaInicio' => true,
        'fechaFinal' => true,
        'idOrganizacion' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
