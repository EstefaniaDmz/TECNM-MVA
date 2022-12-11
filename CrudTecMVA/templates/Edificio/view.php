<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Edificio $edificio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Edificio'), ['action' => 'edit', $edificio->idEdificio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Edificio'), ['action' => 'delete', $edificio->idEdificio], ['confirm' => __('Are you sure you want to delete # {0}?', $edificio->idEdificio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Edificio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Edificio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="edificio view content">
            <h3><?= h($edificio->idEdificio) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($edificio->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEdificio') ?></th>
                    <td><?= $this->Number->format($edificio->idEdificio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($edificio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $edificio->idUsuarioModifica === null ? '' : $this->Number->format($edificio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($edificio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($edificio->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $edificio->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
