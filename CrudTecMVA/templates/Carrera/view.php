<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carrera'), ['action' => 'edit', $carrera->idCarrera], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carrera'), ['action' => 'delete', $carrera->idCarrera], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->idCarrera), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carrera'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carrera view content">
            <h3><?= h($carrera->idCarrera) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($carrera->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave') ?></th>
                    <td><?= h($carrera->clave) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarrera') ?></th>
                    <td><?= $this->Number->format($carrera->idCarrera) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($carrera->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($carrera->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($carrera->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($carrera->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $carrera->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
