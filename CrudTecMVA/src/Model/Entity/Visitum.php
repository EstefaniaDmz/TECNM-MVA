<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visitum Entity
 *
 * @property int $idVisita
 * @property int $idEmpleado
 * @property int $idCarrera
 * @property int $numeroAlumnos
 * @property int $semestre
 * @property \Cake\I18n\FrozenTime $fechaSolicitada
 * @property string|null $empresaPropuesta
 * @property int $idActivoFijo
 * @property string|null $objetivo
 * @property int|null $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime $fechaModifica
 */
class Visitum extends Entity
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
        'idEmpleado' => true,
        'idCarrera' => true,
        'numeroAlumnos' => true,
        'semestre' => true,
        'fechaSolicitada' => true,
        'empresaPropuesta' => true,
        'idActivoFijo' => true,
        'objetivo' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
