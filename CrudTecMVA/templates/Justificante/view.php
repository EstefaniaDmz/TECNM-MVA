<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Justificante $justificante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Justificante'), ['action' => 'edit', $justificante->idJustificante], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Justificante'), ['action' => 'delete', $justificante->idJustificante], ['confirm' => __('Are you sure you want to delete # {0}?', $justificante->idJustificante), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Justificante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Justificante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="justificante view content">
            <h3><?= h($justificante->idJustificante) ?></h3>
            <table>
                <tr>
                    <th><?= __('Motivo') ?></th>
                    <td><?= h($justificante->motivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdJustificante') ?></th>
                    <td><?= $this->Number->format($justificante->idJustificante) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($justificante->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $justificante->estatus === null ? '' : $this->Number->format($justificante->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $justificante->idUsuarioCrea === null ? '' : $this->Number->format($justificante->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $justificante->idUsuarioModifica === null ? '' : $this->Number->format($justificante->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($justificante->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($justificante->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($justificante->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
