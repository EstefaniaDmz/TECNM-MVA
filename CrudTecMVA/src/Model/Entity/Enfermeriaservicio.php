<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enfermeriaservicio Entity
 *
 * @property int $idEnfermeriaServicio
 * @property \Cake\I18n\FrozenTime $fecha
 * @property int|null $idEmpleado
 * @property int|null $idAlumno
 * @property int $idServicio
 * @property int $idTipoUrgencia
 * @property string $observacion
 * @property bool|null $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Enfermeriaservicio extends Entity
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
        'fecha' => true,
        'idEmpleado' => true,
        'idAlumno' => true,
        'idServicio' => true,
        'idTipoUrgencia' => true,
        'observacion' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
