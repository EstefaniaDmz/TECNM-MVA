<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoactividad $tipoactividad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoactividad'), ['action' => 'edit', $tipoactividad->idTipoActividad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoactividad'), ['action' => 'delete', $tipoactividad->idTipoActividad], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoactividad->idTipoActividad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoactividad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoactividad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoactividad view content">
            <h3><?= h($tipoactividad->idTipoActividad) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoActividad') ?></th>
                    <td><?= $this->Number->format($tipoactividad->idTipoActividad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipoactividad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoactividad->idUsuarioModifica === null ? '' : $this->Number->format($tipoactividad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoactividad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoactividad->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipoactividad->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
