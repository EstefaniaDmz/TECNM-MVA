<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enfermeriaservicio $enfermeriaservicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Enfermeriaservicio'), ['action' => 'edit', $enfermeriaservicio->idEnfermeriaServicio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Enfermeriaservicio'), ['action' => 'delete', $enfermeriaservicio->idEnfermeriaServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $enfermeriaservicio->idEnfermeriaServicio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enfermeriaservicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Enfermeriaservicio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enfermeriaservicio view content">
            <h3><?= h($enfermeriaservicio->idEnfermeriaServicio) ?></h3>
            <table>
                <tr>
                    <th><?= __('Observacion') ?></th>
                    <td><?= h($enfermeriaservicio->observacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEnfermeriaServicio') ?></th>
                    <td><?= $this->Number->format($enfermeriaservicio->idEnfermeriaServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $enfermeriaservicio->idEmpleado === null ? '' : $this->Number->format($enfermeriaservicio->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $enfermeriaservicio->idAlumno === null ? '' : $this->Number->format($enfermeriaservicio->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdServicio') ?></th>
                    <td><?= $this->Number->format($enfermeriaservicio->idServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoUrgencia') ?></th>
                    <td><?= $this->Number->format($enfermeriaservicio->idTipoUrgencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($enfermeriaservicio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $enfermeriaservicio->idUsuarioModifica === null ? '' : $this->Number->format($enfermeriaservicio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($enfermeriaservicio->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($enfermeriaservicio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($enfermeriaservicio->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $enfermeriaservicio->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
