<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudsoftware $solicitudsoftware
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solicitudsoftware'), ['action' => 'edit', $solicitudsoftware->idSolicitudSoftware], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solicitudsoftware'), ['action' => 'delete', $solicitudsoftware->idSolicitudSoftware], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudsoftware->idSolicitudSoftware), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solicitudsoftware'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solicitudsoftware'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudsoftware view content">
            <h3><?= h($solicitudsoftware->idSolicitudSoftware) ?></h3>
            <table>
                <tr>
                    <th><?= __('Notas') ?></th>
                    <td><?= h($solicitudsoftware->notas) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSolicitudSoftware') ?></th>
                    <td><?= $this->Number->format($solicitudsoftware->idSolicitudSoftware) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSolicitudLaboratorio') ?></th>
                    <td><?= $this->Number->format($solicitudsoftware->idSolicitudLaboratorio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSoftware') ?></th>
                    <td><?= $solicitudsoftware->idSoftware === null ? '' : $this->Number->format($solicitudsoftware->idSoftware) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $solicitudsoftware->estatus === null ? '' : $this->Number->format($solicitudsoftware->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $solicitudsoftware->idUsuarioCrea === null ? '' : $this->Number->format($solicitudsoftware->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $solicitudsoftware->idUsuarioModifica === null ? '' : $this->Number->format($solicitudsoftware->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($solicitudsoftware->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($solicitudsoftware->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
