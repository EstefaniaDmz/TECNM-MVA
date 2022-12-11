<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consumible $consumible
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Consumible'), ['action' => 'edit', $consumible->idConsumible], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Consumible'), ['action' => 'delete', $consumible->idConsumible], ['confirm' => __('Are you sure you want to delete # {0}?', $consumible->idConsumible), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Consumible'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Consumible'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="consumible view content">
            <h3><?= h($consumible->idConsumible) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($consumible->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($consumible->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdConsumible') ?></th>
                    <td><?= $this->Number->format($consumible->idConsumible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($consumible->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $consumible->estatus === null ? '' : $this->Number->format($consumible->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $consumible->idUsuarioCrea === null ? '' : $this->Number->format($consumible->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $consumible->idUsuarioModifica === null ? '' : $this->Number->format($consumible->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($consumible->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($consumible->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
