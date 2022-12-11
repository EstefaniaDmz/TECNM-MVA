<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopreparatorium $tipopreparatorium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipopreparatorium'), ['action' => 'edit', $tipopreparatorium->idTipoPreparatoria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipopreparatorium'), ['action' => 'delete', $tipopreparatorium->idTipoPreparatoria], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopreparatorium->idTipoPreparatoria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipopreparatoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipopreparatorium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipopreparatoria view content">
            <h3><?= h($tipopreparatorium->idTipoPreparatoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipopreparatorium->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoPreparatoria') ?></th>
                    <td><?= $this->Number->format($tipopreparatorium->idTipoPreparatoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipopreparatorium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($tipopreparatorium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipopreparatorium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipopreparatorium->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipopreparatorium->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
