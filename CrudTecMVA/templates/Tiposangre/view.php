<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposangre $tiposangre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tiposangre'), ['action' => 'edit', $tiposangre->idTipoSangre], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tiposangre'), ['action' => 'delete', $tiposangre->idTipoSangre], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposangre->idTipoSangre), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tiposangre'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tiposangre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposangre view content">
            <h3><?= h($tiposangre->idTipoSangre) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoSangre') ?></th>
                    <td><?= $this->Number->format($tiposangre->idTipoSangre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tiposangre->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tiposangre->idUsuarioModifica === null ? '' : $this->Number->format($tiposangre->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tiposangre->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tiposangre->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tiposangre->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
