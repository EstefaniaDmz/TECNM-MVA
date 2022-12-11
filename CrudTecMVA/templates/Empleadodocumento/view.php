<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadodocumento $empleadodocumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empleadodocumento'), ['action' => 'edit', $empleadodocumento->idEmpleadoDocumento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleadodocumento'), ['action' => 'delete', $empleadodocumento->idEmpleadoDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadodocumento->idEmpleadoDocumento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleadodocumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleadodocumento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadodocumento view content">
            <h3><?= h($empleadodocumento->idEmpleadoDocumento) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdEmpleadoDocumento') ?></th>
                    <td><?= $this->Number->format($empleadodocumento->idEmpleadoDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($empleadodocumento->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDocumento') ?></th>
                    <td><?= $this->Number->format($empleadodocumento->idDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $empleadodocumento->idUsuarioCrea === null ? '' : $this->Number->format($empleadodocumento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $empleadodocumento->idUsuarioModifica === null ? '' : $this->Number->format($empleadodocumento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaEntrega') ?></th>
                    <td><?= h($empleadodocumento->fechaEntrega) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($empleadodocumento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($empleadodocumento->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $empleadodocumento->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
