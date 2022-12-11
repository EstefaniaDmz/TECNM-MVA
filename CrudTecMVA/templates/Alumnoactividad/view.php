<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnoactividad $alumnoactividad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnoactividad'), ['action' => 'edit', $alumnoactividad->idAlumnoActividad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnoactividad'), ['action' => 'delete', $alumnoactividad->idAlumnoActividad], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoactividad->idAlumnoActividad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnoactividad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnoactividad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnoactividad view content">
            <h3><?= h($alumnoactividad->idAlumnoActividad) ?></h3>
            <table>
                <tr>
                    <th><?= __('Observacion') ?></th>
                    <td><?= h($alumnoactividad->observacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumnoActividad') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->idAlumnoActividad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->nivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('ValorCredito') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->valorCredito) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPeriodo') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->idPeriodo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActividad') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->idActividad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($alumnoactividad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $alumnoactividad->idUsuarioModifica === null ? '' : $this->Number->format($alumnoactividad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumnoactividad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumnoactividad->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumnoactividad->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
