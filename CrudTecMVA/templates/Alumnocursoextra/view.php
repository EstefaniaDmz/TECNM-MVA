<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnocursoextra $alumnocursoextra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnocursoextra'), ['action' => 'edit', $alumnocursoextra->idAlumnoCursoExtra], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnocursoextra'), ['action' => 'delete', $alumnocursoextra->idAlumnoCursoExtra], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnocursoextra->idAlumnoCursoExtra), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnocursoextra'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnocursoextra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnocursoextra view content">
            <h3><?= h($alumnocursoextra->idAlumnoCursoExtra) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdAlumnoCursoExtra') ?></th>
                    <td><?= $this->Number->format($alumnocursoextra->idAlumnoCursoExtra) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumnocursoextra->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCursoExtraordinario') ?></th>
                    <td><?= $this->Number->format($alumnocursoextra->idCursoExtraordinario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPago') ?></th>
                    <td><?= $this->Number->format($alumnocursoextra->idPago) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($alumnocursoextra->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $alumnocursoextra->idUsuarioModifica === null ? '' : $this->Number->format($alumnocursoextra->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumnocursoextra->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumnocursoextra->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumnocursoextra->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
