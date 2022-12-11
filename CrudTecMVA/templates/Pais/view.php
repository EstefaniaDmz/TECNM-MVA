<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pai $pai
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pai'), ['action' => 'edit', $pai->idPais], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pai'), ['action' => 'delete', $pai->idPais], ['confirm' => __('Are you sure you want to delete # {0}?', $pai->idPais), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pais'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pai'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pais view content">
            <h3><?= h($pai->idPais) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdPais') ?></th>
                    <td><?= $this->Number->format($pai->idPais) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($pai->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $pai->idUsuarioModifica === null ? '' : $this->Number->format($pai->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($pai->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($pai->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $pai->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
