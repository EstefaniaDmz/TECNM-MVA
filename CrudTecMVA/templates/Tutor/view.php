<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tutor'), ['action' => 'edit', $tutor->idTutor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tutor'), ['action' => 'delete', $tutor->idTutor], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->idTutor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tutor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tutor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tutor view content">
            <h3><?= h($tutor->idTutor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tutor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($tutor->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($tutor->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curp') ?></th>
                    <td><?= h($tutor->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($tutor->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($tutor->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTutor') ?></th>
                    <td><?= $this->Number->format($tutor->idTutor) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroInterior') ?></th>
                    <td><?= $tutor->numeroInterior === null ? '' : $this->Number->format($tutor->numeroInterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroExterior') ?></th>
                    <td><?= $tutor->numeroExterior === null ? '' : $this->Number->format($tutor->numeroExterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsentamiento') ?></th>
                    <td><?= $this->Number->format($tutor->idAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tutor->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($tutor->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($tutor->fechaNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tutor->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tutor->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tutor->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
