<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnoasignaturadocente $alumnoasignaturadocente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnoasignaturadocente'), ['action' => 'edit', $alumnoasignaturadocente->idAlumnoAsignaturaDocente], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnoasignaturadocente'), ['action' => 'delete', $alumnoasignaturadocente->idAlumnoAsignaturaDocente], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoasignaturadocente->idAlumnoAsignaturaDocente), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnoasignaturadocente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnoasignaturadocente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnoasignaturadocente view content">
            <h3><?= h($alumnoasignaturadocente->idAlumnoAsignaturaDocente) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdAlumnoAsignaturaDocente') ?></th>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idAlumnoAsignaturaDocente) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsignaturaDocente') ?></th>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idAsignaturaDocente) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $alumnoasignaturadocente->idUsuarioModifica === null ? '' : $this->Number->format($alumnoasignaturadocente->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumnoasignaturadocente->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumnoasignaturadocente->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumnoasignaturadocente->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
