<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumno Entity
 *
 * @property int $idAlumno
 * @property string $matricula
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property \Cake\I18n\FrozenDate $fechaNacimiento
 * @property string $curp
 * @property string $rfc
 * @property int $idGenero
 * @property string|null $discapacidad
 * @property string|null $lenguaIndigena
 * @property string|null $nss
 * @property int|null $idInstitucionSalud
 * @property string $telefono
 * @property string $correoPersonal
 * @property string|null $correoInstitucional
 * @property int $idCarrera
 * @property int $semestre
 * @property int $idTurno
 * @property int $idPreparatoria
 * @property string $promedioGeneralPrepa
 * @property string $calle
 * @property string|null $numeroInterior
 * @property string|null $numeroExterior
 * @property int $idAsentamiento
 * @property int $idCiudadNacimiento
 * @property int $idTipoSangre
 * @property string|null $alergia
 * @property string|null $lugarTrabajo
 * @property string|null $horarioTrabajo
 * @property bool $estatus
 * @property int $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime $fechaCrea
 * @property int $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime $fechaModifica
 */
class Alumno extends Entity
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
        'matricula' => true,
        'nombre' => true,
        'apellidoPaterno' => true,
        'apellidoMaterno' => true,
        'fechaNacimiento' => true,
        'curp' => true,
        'rfc' => true,
        'idGenero' => true,
        'discapacidad' => true,
        'lenguaIndigena' => true,
        'nss' => true,
        'idInstitucionSalud' => true,
        'telefono' => true,
        'correoPersonal' => true,
        'correoInstitucional' => true,
        'idCarrera' => true,
        'semestre' => true,
        'idTurno' => true,
        'idPreparatoria' => true,
        'promedioGeneralPrepa' => true,
        'calle' => true,
        'numeroInterior' => true,
        'numeroExterior' => true,
        'idAsentamiento' => true,
        'idCiudadNacimiento' => true,
        'idTipoSangre' => true,
        'alergia' => true,
        'lugarTrabajo' => true,
        'horarioTrabajo' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
