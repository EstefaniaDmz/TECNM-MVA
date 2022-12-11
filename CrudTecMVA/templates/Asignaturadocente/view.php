<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignaturadocente $asignaturadocente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Asignaturadocente'), ['action' => 'edit', $asignaturadocente->idAsignaturaDocente], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Asignaturadocente'), ['action' => 'delete', $asignaturadocente->idAsignaturaDocente], ['confirm' => __('Are you sure you want to delete # {0}?', $asignaturadocente->idAsignaturaDocente), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Asignaturadocente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Asignaturadocente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignaturadocente view content">
            <h3><?= h($asignaturadocente->idAsignaturaDocente) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdAsignaturaDocente') ?></th>
                    <td><?= $this->Number->format($asignaturadocente->idAsignaturaDocente) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsignatura') ?></th>
                    <td><?= $this->Number->format($asignaturadocente->idAsignatura) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDocente') ?></th>
                    <td><?= $this->Number->format($asignaturadocente->idDocente) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdHora') ?></th>
                    <td><?= $this->Number->format($asignaturadocente->idHora) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPeriodo') ?></th>
                    <td><?= $this->Number->format($asignaturadocente->idPeriodo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($asignaturadocente->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $asignaturadocente->idUsuarioModifica === null ? '' : $this->Number->format($asignaturadocente->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($asignaturadocente->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($asignaturadocente->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $asignaturadocente->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
