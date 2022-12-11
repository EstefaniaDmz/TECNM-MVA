<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipourgencium $tipourgencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipourgencium'), ['action' => 'edit', $tipourgencium->idTipoUrgencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipourgencium'), ['action' => 'delete', $tipourgencium->idTipoUrgencia], ['confirm' => __('Are you sure you want to delete # {0}?', $tipourgencium->idTipoUrgencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipourgencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipourgencium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipourgencia view content">
            <h3><?= h($tipourgencium->idTipoUrgencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoUrgencia') ?></th>
                    <td><?= $this->Number->format($tipourgencium->idTipoUrgencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipourgencium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipourgencium->idUsuarioModifica === null ? '' : $this->Number->format($tipourgencium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipourgencium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipourgencium->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipourgencium->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
