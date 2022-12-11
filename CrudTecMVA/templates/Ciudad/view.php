<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciudad $ciudad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ciudad'), ['action' => 'edit', $ciudad->idCiudad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ciudad'), ['action' => 'delete', $ciudad->idCiudad], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudad->idCiudad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ciudad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ciudad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciudad view content">
            <h3><?= h($ciudad->idCiudad) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($ciudad->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCiudad') ?></th>
                    <td><?= $this->Number->format($ciudad->idCiudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= $this->Number->format($ciudad->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstado') ?></th>
                    <td><?= $this->Number->format($ciudad->idEstado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($ciudad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $ciudad->idUsuarioModifica === null ? '' : $this->Number->format($ciudad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($ciudad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($ciudad->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $ciudad->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
