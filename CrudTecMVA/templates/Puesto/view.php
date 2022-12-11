<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Puesto $puesto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Puesto'), ['action' => 'edit', $puesto->idPuesto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Puesto'), ['action' => 'delete', $puesto->idPuesto], ['confirm' => __('Are you sure you want to delete # {0}?', $puesto->idPuesto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Puesto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Puesto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="puesto view content">
            <h3><?= h($puesto->idPuesto) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdPuesto') ?></th>
                    <td><?= $this->Number->format($puesto->idPuesto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($puesto->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $puesto->idUsuarioModifica === null ? '' : $this->Number->format($puesto->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($puesto->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($puesto->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $puesto->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
