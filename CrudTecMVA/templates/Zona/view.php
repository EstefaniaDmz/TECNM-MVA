<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zona $zona
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Zona'), ['action' => 'edit', $zona->idZona], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Zona'), ['action' => 'delete', $zona->idZona], ['confirm' => __('Are you sure you want to delete # {0}?', $zona->idZona), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Zona'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Zona'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="zona view content">
            <h3><?= h($zona->idZona) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($zona->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdZona') ?></th>
                    <td><?= $this->Number->format($zona->idZona) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($zona->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $zona->idUsuarioModifica === null ? '' : $this->Number->format($zona->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($zona->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($zona->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $zona->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
