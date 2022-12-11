<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ficha $ficha
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ficha'), ['action' => 'edit', $ficha->idFicha], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ficha'), ['action' => 'delete', $ficha->idFicha], ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->idFicha), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ficha'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ficha'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ficha view content">
            <h3><?= h($ficha->idFicha) ?></h3>
            <table>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($ficha->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdFicha') ?></th>
                    <td><?= $this->Number->format($ficha->idFicha) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTurno') ?></th>
                    <td><?= $this->Number->format($ficha->idTurno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarreraPrimera') ?></th>
                    <td><?= $this->Number->format($ficha->idCarreraPrimera) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarreraSegunda') ?></th>
                    <td><?= $this->Number->format($ficha->idCarreraSegunda) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($ficha->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($ficha->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($ficha->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($ficha->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($ficha->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $ficha->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
