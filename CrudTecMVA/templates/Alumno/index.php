<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumno> $alumno
 */
?>
<div class="alumno index content">
    <?= $this->Html->link(__('New Alumno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumno') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('matricula') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                    <th><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('curp') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('idGenero') ?></th>
                    <th><?= $this->Paginator->sort('discapacidad') ?></th>
                    <th><?= $this->Paginator->sort('lenguaIndigena') ?></th>
                    <th><?= $this->Paginator->sort('nss') ?></th>
                    <th><?= $this->Paginator->sort('idInstitucionSalud') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('correoPersonal') ?></th>
                    <th><?= $this->Paginator->sort('correoInstitucional') ?></th>
                    <th><?= $this->Paginator->sort('idCarrera') ?></th>
                    <th><?= $this->Paginator->sort('semestre') ?></th>
                    <th><?= $this->Paginator->sort('idTurno') ?></th>
                    <th><?= $this->Paginator->sort('idPreparatoria') ?></th>
                    <th><?= $this->Paginator->sort('promedioGeneralPrepa') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('numeroInterior') ?></th>
                    <th><?= $this->Paginator->sort('numeroExterior') ?></th>
                    <th><?= $this->Paginator->sort('idAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('idCiudadNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('idTipoSangre') ?></th>
                    <th><?= $this->Paginator->sort('alergia') ?></th>
                    <th><?= $this->Paginator->sort('lugarTrabajo') ?></th>
                    <th><?= $this->Paginator->sort('horarioTrabajo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumno as $alumno): ?>
                <tr>
                    <td><?= $this->Number->format($alumno->idAlumno) ?></td>
                    <td><?= h($alumno->matricula) ?></td>
                    <td><?= h($alumno->nombre) ?></td>
                    <td><?= h($alumno->apellidoPaterno) ?></td>
                    <td><?= h($alumno->apellidoMaterno) ?></td>
                    <td><?= h($alumno->fechaNacimiento) ?></td>
                    <td><?= h($alumno->curp) ?></td>
                    <td><?= h($alumno->rfc) ?></td>
                    <td><?= $this->Number->format($alumno->idGenero) ?></td>
                    <td><?= h($alumno->discapacidad) ?></td>
                    <td><?= h($alumno->lenguaIndigena) ?></td>
                    <td><?= h($alumno->nss) ?></td>
                    <td><?= $alumno->idInstitucionSalud === null ? '' : $this->Number->format($alumno->idInstitucionSalud) ?></td>
                    <td><?= h($alumno->telefono) ?></td>
                    <td><?= h($alumno->correoPersonal) ?></td>
                    <td><?= h($alumno->correoInstitucional) ?></td>
                    <td><?= $this->Number->format($alumno->idCarrera) ?></td>
                    <td><?= $this->Number->format($alumno->semestre) ?></td>
                    <td><?= $this->Number->format($alumno->idTurno) ?></td>
                    <td><?= $this->Number->format($alumno->idPreparatoria) ?></td>
                    <td><?= $this->Number->format($alumno->promedioGeneralPrepa) ?></td>
                    <td><?= h($alumno->calle) ?></td>
                    <td><?= h($alumno->numeroInterior) ?></td>
                    <td><?= h($alumno->numeroExterior) ?></td>
                    <td><?= $this->Number->format($alumno->idAsentamiento) ?></td>
                    <td><?= $this->Number->format($alumno->idCiudadNacimiento) ?></td>
                    <td><?= $this->Number->format($alumno->idTipoSangre) ?></td>
                    <td><?= h($alumno->alergia) ?></td>
                    <td><?= h($alumno->lugarTrabajo) ?></td>
                    <td><?= h($alumno->horarioTrabajo) ?></td>
                    <td><?= h($alumno->estatus) ?></td>
                    <td><?= $this->Number->format($alumno->idUsuarioCrea) ?></td>
                    <td><?= h($alumno->fechaCrea) ?></td>
                    <td><?= $this->Number->format($alumno->idUsuarioModifica) ?></td>
                    <td><?= h($alumno->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumno->idAlumno]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumno->idAlumno]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumno->idAlumno], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->idAlumno)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
