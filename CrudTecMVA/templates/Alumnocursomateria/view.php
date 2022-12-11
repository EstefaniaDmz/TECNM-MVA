<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnocursomaterium $alumnocursomaterium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnocursomaterium'), ['action' => 'edit', $alumnocursomaterium->idAlumnoCursoMateria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnocursomaterium'), ['action' => 'delete', $alumnocursomaterium->idAlumnoCursoMateria], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnocursomaterium->idAlumnoCursoMateria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnocursomateria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnocursomaterium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnocursomateria view content">
            <h3><?= h($alumnocursomaterium->idAlumnoCursoMateria) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdAlumnoCursoMateria') ?></th>
                    <td><?= $this->Number->format($alumnocursomaterium->idAlumnoCursoMateria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumnocursomaterium->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCurso') ?></th>
                    <td><?= $this->Number->format($alumnocursomaterium->idCurso) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMateria') ?></th>
                    <td><?= $alumnocursomaterium->idMateria === null ? '' : $this->Number->format($alumnocursomaterium->idMateria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calificacion') ?></th>
                    <td><?= $this->Number->format($alumnocursomaterium->calificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPeriodo') ?></th>
                    <td><?= $this->Number->format($alumnocursomaterium->idPeriodo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $alumnocursomaterium->idUsuarioCrea === null ? '' : $this->Number->format($alumnocursomaterium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $alumnocursomaterium->idUsuarioModifica === null ? '' : $this->Number->format($alumnocursomaterium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumnocursomaterium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumnocursomaterium->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumnocursomaterium->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
