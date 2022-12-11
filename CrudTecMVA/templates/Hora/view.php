<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hora $hora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hora'), ['action' => 'edit', $hora->idHora], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hora'), ['action' => 'delete', $hora->idHora], ['confirm' => __('Are you sure you want to delete # {0}?', $hora->idHora), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hora'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hora'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hora view content">
            <h3><?= h($hora->idHora) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdHora') ?></th>
                    <td><?= $this->Number->format($hora->idHora) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($hora->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $hora->idUsuarioModifica === null ? '' : $this->Number->format($hora->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($hora->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($hora->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $hora->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
