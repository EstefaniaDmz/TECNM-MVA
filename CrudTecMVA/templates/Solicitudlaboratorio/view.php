<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudlaboratorio $solicitudlaboratorio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solicitudlaboratorio'), ['action' => 'edit', $solicitudlaboratorio->idSolicitudLaboratorio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solicitudlaboratorio'), ['action' => 'delete', $solicitudlaboratorio->idSolicitudLaboratorio], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudlaboratorio->idSolicitudLaboratorio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solicitudlaboratorio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solicitudlaboratorio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudlaboratorio view content">
            <h3><?= h($solicitudlaboratorio->idSolicitudLaboratorio) ?></h3>
            <table>
                <tr>
                    <th><?= __('Notas') ?></th>
                    <td><?= h($solicitudlaboratorio->notas) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSolicitudLaboratorio') ?></th>
                    <td><?= $this->Number->format($solicitudlaboratorio->idSolicitudLaboratorio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $solicitudlaboratorio->idEmpleado === null ? '' : $this->Number->format($solicitudlaboratorio->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroAlumnos') ?></th>
                    <td><?= $this->Number->format($solicitudlaboratorio->numeroAlumnos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $solicitudlaboratorio->estatus === null ? '' : $this->Number->format($solicitudlaboratorio->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $solicitudlaboratorio->idUsuarioCrea === null ? '' : $this->Number->format($solicitudlaboratorio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $solicitudlaboratorio->idUsuarioModifica === null ? '' : $this->Number->format($solicitudlaboratorio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($solicitudlaboratorio->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($solicitudlaboratorio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($solicitudlaboratorio->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
