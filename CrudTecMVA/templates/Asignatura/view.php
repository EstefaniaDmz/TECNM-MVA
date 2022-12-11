<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignatura $asignatura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Asignatura'), ['action' => 'edit', $asignatura->idAsignatura], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Asignatura'), ['action' => 'delete', $asignatura->idAsignatura], ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->idAsignatura), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Asignatura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Asignatura'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignatura view content">
            <h3><?= h($asignatura->idAsignatura) ?></h3>
            <table>
                <tr>
                    <th><?= __('Clave') ?></th>
                    <td><?= h($asignatura->clave) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($asignatura->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsignatura') ?></th>
                    <td><?= $this->Number->format($asignatura->idAsignatura) ?></td>
                </tr>
                <tr>
                    <th><?= __('HorasPractica') ?></th>
                    <td><?= $this->Number->format($asignatura->horasPractica) ?></td>
                </tr>
                <tr>
                    <th><?= __('HorasTeoricas') ?></th>
                    <td><?= $this->Number->format($asignatura->horasTeoricas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creditos') ?></th>
                    <td><?= $this->Number->format($asignatura->creditos) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($asignatura->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $asignatura->idUsuarioModifica === null ? '' : $this->Number->format($asignatura->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($asignatura->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($asignatura->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $asignatura->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
