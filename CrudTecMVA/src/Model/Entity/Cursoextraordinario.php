<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cursoextraordinario Entity
 *
 * @property int $idCursoExtraordinario
 * @property int $idTipoCursoMateria
 * @property int $idDocente
 * @property \Cake\I18n\FrozenTime $fechaInicio
 * @property \Cake\I18n\FrozenTime $fechaFinal
 * @property int $totalHoras
 * @property int $totalAlumnos
 * @property int $precio
 * @property string $precioIndividual
 * @property bool|null $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Cursoextraordinario extends Entity
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
        'idTipoCursoMateria' => true,
        'idDocente' => true,
        'fechaInicio' => true,
        'fechaFinal' => true,
        'totalHoras' => true,
        'totalAlumnos' => true,
        'precio' => true,
        'precioIndividual' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
