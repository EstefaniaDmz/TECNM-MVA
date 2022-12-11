<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio $tiposervicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tiposervicio'), ['action' => 'edit', $tiposervicio->idTipoServicio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tiposervicio'), ['action' => 'delete', $tiposervicio->idTipoServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->idTipoServicio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tiposervicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tiposervicio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposervicio view content">
            <h3><?= h($tiposervicio->idTipoServicio) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoServicio') ?></th>
                    <td><?= $this->Number->format($tiposervicio->idTipoServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tiposervicio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tiposervicio->idUsuarioModifica === null ? '' : $this->Number->format($tiposervicio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tiposervicio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tiposervicio->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tiposervicio->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
