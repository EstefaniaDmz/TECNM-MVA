<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno $alumno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumno'), ['action' => 'edit', $alumno->idAlumno], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumno'), ['action' => 'delete', $alumno->idAlumno], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->idAlumno), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumno view content">
            <h3><?= h($alumno->idAlumno) ?></h3>
            <table>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= h($alumno->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($alumno->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($alumno->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($alumno->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curp') ?></th>
                    <td><?= h($alumno->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($alumno->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discapacidad') ?></th>
                    <td><?= h($alumno->discapacidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('LenguaIndigena') ?></th>
                    <td><?= h($alumno->lenguaIndigena) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nss') ?></th>
                    <td><?= h($alumno->nss) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($alumno->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('CorreoPersonal') ?></th>
                    <td><?= h($alumno->correoPersonal) ?></td>
                </tr>
                <tr>
                    <th><?= __('CorreoInstitucional') ?></th>
                    <td><?= h($alumno->correoInstitucional) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($alumno->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroInterior') ?></th>
                    <td><?= h($alumno->numeroInterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroExterior') ?></th>
                    <td><?= h($alumno->numeroExterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alergia') ?></th>
                    <td><?= h($alumno->alergia) ?></td>
                </tr>
                <tr>
                    <th><?= __('LugarTrabajo') ?></th>
                    <td><?= h($alumno->lugarTrabajo) ?></td>
                </tr>
                <tr>
                    <th><?= __('HorarioTrabajo') ?></th>
                    <td><?= h($alumno->horarioTrabajo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumno->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdGenero') ?></th>
                    <td><?= $this->Number->format($alumno->idGenero) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucionSalud') ?></th>
                    <td><?= $alumno->idInstitucionSalud === null ? '' : $this->Number->format($alumno->idInstitucionSalud) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarrera') ?></th>
                    <td><?= $this->Number->format($alumno->idCarrera) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semestre') ?></th>
                    <td><?= $this->Number->format($alumno->semestre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTurno') ?></th>
                    <td><?= $this->Number->format($alumno->idTurno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPreparatoria') ?></th>
                    <td><?= $this->Number->format($alumno->idPreparatoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('PromedioGeneralPrepa') ?></th>
                    <td><?= $this->Number->format($alumno->promedioGeneralPrepa) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsentamiento') ?></th>
                    <td><?= $this->Number->format($alumno->idAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCiudadNacimiento') ?></th>
                    <td><?= $this->Number->format($alumno->idCiudadNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoSangre') ?></th>
                    <td><?= $this->Number->format($alumno->idTipoSangre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($alumno->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($alumno->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($alumno->fechaNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumno->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumno->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumno->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
