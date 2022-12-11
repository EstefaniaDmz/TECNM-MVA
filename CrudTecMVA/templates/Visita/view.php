<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitum $visitum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Visitum'), ['action' => 'edit', $visitum->idVisita], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visitum'), ['action' => 'delete', $visitum->idVisita], ['confirm' => __('Are you sure you want to delete # {0}?', $visitum->idVisita), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Visita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Visitum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visita view content">
            <h3><?= h($visitum->idVisita) ?></h3>
            <table>
                <tr>
                    <th><?= __('EmpresaPropuesta') ?></th>
                    <td><?= h($visitum->empresaPropuesta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objetivo') ?></th>
                    <td><?= h($visitum->objetivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVisita') ?></th>
                    <td><?= $this->Number->format($visitum->idVisita) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($visitum->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarrera') ?></th>
                    <td><?= $this->Number->format($visitum->idCarrera) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroAlumnos') ?></th>
                    <td><?= $this->Number->format($visitum->numeroAlumnos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semestre') ?></th>
                    <td><?= $this->Number->format($visitum->semestre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActivoFijo') ?></th>
                    <td><?= $this->Number->format($visitum->idActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $visitum->estatus === null ? '' : $this->Number->format($visitum->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($visitum->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($visitum->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaSolicitada') ?></th>
                    <td><?= h($visitum->fechaSolicitada) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($visitum->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($visitum->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
