<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoactivofijo $tipoactivofijo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoactivofijo'), ['action' => 'edit', $tipoactivofijo->idTipoActivoFijo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoactivofijo'), ['action' => 'delete', $tipoactivofijo->idTipoActivoFijo], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoactivofijo->idTipoActivoFijo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoactivofijo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoactivofijo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoactivofijo view content">
            <h3><?= h($tipoactivofijo->idTipoActivoFijo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipoactivofijo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoActivoFijo') ?></th>
                    <td><?= $this->Number->format($tipoactivofijo->idTipoActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipoactivofijo->idUsuarioCrea === null ? '' : $this->Number->format($tipoactivofijo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoactivofijo->idUsuarioModifica === null ? '' : $this->Number->format($tipoactivofijo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoactivofijo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoactivofijo->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipoactivofijo->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
