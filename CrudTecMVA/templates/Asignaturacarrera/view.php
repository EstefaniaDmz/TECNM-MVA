<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignaturacarrera $asignaturacarrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Asignaturacarrera'), ['action' => 'edit', $asignaturacarrera->idAsignaturaCarrera], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Asignaturacarrera'), ['action' => 'delete', $asignaturacarrera->idAsignaturaCarrera], ['confirm' => __('Are you sure you want to delete # {0}?', $asignaturacarrera->idAsignaturaCarrera), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Asignaturacarrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Asignaturacarrera'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignaturacarrera view content">
            <h3><?= h($asignaturacarrera->idAsignaturaCarrera) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdAsignaturaCarrera') ?></th>
                    <td><?= $this->Number->format($asignaturacarrera->idAsignaturaCarrera) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsignatura') ?></th>
                    <td><?= $this->Number->format($asignaturacarrera->idAsignatura) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarrera') ?></th>
                    <td><?= $this->Number->format($asignaturacarrera->idCarrera) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($asignaturacarrera->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($asignaturacarrera->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($asignaturacarrera->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($asignaturacarrera->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $asignaturacarrera->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
