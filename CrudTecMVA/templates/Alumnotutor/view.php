<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnotutor $alumnotutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnotutor'), ['action' => 'edit', $alumnotutor->idAlumnoTutor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnotutor'), ['action' => 'delete', $alumnotutor->idAlumnoTutor], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnotutor->idAlumnoTutor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnotutor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnotutor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnotutor view content">
            <h3><?= h($alumnotutor->idAlumnoTutor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parentesco') ?></th>
                    <td><?= h($alumnotutor->parentesco) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumnoTutor') ?></th>
                    <td><?= $this->Number->format($alumnotutor->idAlumnoTutor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumnotutor->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTutor') ?></th>
                    <td><?= $this->Number->format($alumnotutor->idTutor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($alumnotutor->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $alumnotutor->idUsuarioModifica === null ? '' : $this->Number->format($alumnotutor->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumnotutor->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumnotutor->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('ContactoEmergencia') ?></th>
                    <td><?= $alumnotutor->contactoEmergencia ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('RecogeDocumento') ?></th>
                    <td><?= $alumnotutor->recogeDocumento ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumnotutor->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
