<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Periodo'), ['action' => 'edit', $periodo->idPeriodo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Periodo'), ['action' => 'delete', $periodo->idPeriodo], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->idPeriodo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Periodo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Periodo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="periodo view content">
            <h3><?= h($periodo->idPeriodo) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdPeriodo') ?></th>
                    <td><?= $this->Number->format($periodo->idPeriodo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($periodo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $periodo->idUsuarioModifica === null ? '' : $this->Number->format($periodo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($periodo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($periodo->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $periodo->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
