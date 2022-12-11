<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activofijo $activofijo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activofijo'), ['action' => 'edit', $activofijo->idActivoFijo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activofijo'), ['action' => 'delete', $activofijo->idActivoFijo], ['confirm' => __('Are you sure you want to delete # {0}?', $activofijo->idActivoFijo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activofijo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activofijo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="activofijo view content">
            <h3><?= h($activofijo->idActivoFijo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($activofijo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($activofijo->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($activofijo->modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($activofijo->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActivoFijo') ?></th>
                    <td><?= $this->Number->format($activofijo->idActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdArea') ?></th>
                    <td><?= $this->Number->format($activofijo->idArea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoActivoFijo') ?></th>
                    <td><?= $this->Number->format($activofijo->idTipoActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $activofijo->idUsuarioCrea === null ? '' : $this->Number->format($activofijo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $activofijo->idUsuarioModifica === null ? '' : $this->Number->format($activofijo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($activofijo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($activofijo->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $activofijo->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
