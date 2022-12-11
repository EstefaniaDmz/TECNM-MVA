<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumnoactividad Entity
 *
 * @property int $idAlumnoActividad
 * @property int $nivel
 * @property string|null $observacion
 * @property int $valorCredito
 * @property int $idPeriodo
 * @property int $idAlumno
 * @property int $idEmpleado
 * @property int $idActividad
 * @property bool $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Alumnoactividad extends Entity
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
        'nivel' => true,
        'observacion' => true,
        'valorCredito' => true,
        'idPeriodo' => true,
        'idAlumno' => true,
        'idEmpleado' => true,
        'idActividad' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
