<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoorganizacion $tipoorganizacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoorganizacion'), ['action' => 'edit', $tipoorganizacion->idTipoOrganizacion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoorganizacion'), ['action' => 'delete', $tipoorganizacion->idTipoOrganizacion], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoorganizacion->idTipoOrganizacion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoorganizacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoorganizacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoorganizacion view content">
            <h3><?= h($tipoorganizacion->idTipoOrganizacion) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoOrganizacion') ?></th>
                    <td><?= $this->Number->format($tipoorganizacion->idTipoOrganizacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipoorganizacion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoorganizacion->idUsuarioModifica === null ? '' : $this->Number->format($tipoorganizacion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoorganizacion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoorganizacion->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipoorganizacion->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
