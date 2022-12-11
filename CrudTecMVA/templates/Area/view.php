<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->idArea], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->idArea], ['confirm' => __('Are you sure you want to delete # {0}?', $area->idArea), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Area'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Area'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="area view content">
            <h3><?= h($area->idArea) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($area->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdArea') ?></th>
                    <td><?= $this->Number->format($area->idArea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEdificio') ?></th>
                    <td><?= $this->Number->format($area->idEdificio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $area->idUsuarioCrea === null ? '' : $this->Number->format($area->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $area->idUsuarioModifica === null ? '' : $this->Number->format($area->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($area->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($area->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $area->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
