<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoasentamiento $tipoasentamiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoasentamiento'), ['action' => 'edit', $tipoasentamiento->idTipoAsentamiento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoasentamiento'), ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoasentamiento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoasentamiento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoasentamiento view content">
            <h3><?= h($tipoasentamiento->idTipoAsentamiento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipoasentamiento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoAsentamiento') ?></th>
                    <td><?= $this->Number->format($tipoasentamiento->idTipoAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipoasentamiento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoasentamiento->idUsuarioModifica === null ? '' : $this->Number->format($tipoasentamiento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoasentamiento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoasentamiento->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipoasentamiento->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
