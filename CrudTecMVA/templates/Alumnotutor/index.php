<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumnotutor> $alumnotutor
 */
?>
<div class="alumnotutor index content">
    <?= $this->Html->link(__('New Alumnotutor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnotutor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumnoTutor') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idTutor') ?></th>
                    <th><?= $this->Paginator->sort('parentesco') ?></th>
                    <th><?= $this->Paginator->sort('contactoEmergencia') ?></th>
                    <th><?= $this->Paginator->sort('recogeDocumento') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnotutor as $alumnotutor): ?>
                <tr>
                    <td><?= $this->Number->format($alumnotutor->idAlumnoTutor) ?></td>
                    <td><?= $this->Number->format($alumnotutor->idAlumno) ?></td>
                    <td><?= $this->Number->format($alumnotutor->idTutor) ?></td>
                    <td><?= h($alumnotutor->parentesco) ?></td>
                    <td><?= h($alumnotutor->contactoEmergencia) ?></td>
                    <td><?= h($alumnotutor->recogeDocumento) ?></td>
                    <td><?= h($alumnotutor->estatus) ?></td>
                    <td><?= $this->Number->format($alumnotutor->idUsuarioCrea) ?></td>
                    <td><?= h($alumnotutor->fechaCrea) ?></td>
                    <td><?= $alumnotutor->idUsuarioModifica === null ? '' : $this->Number->format($alumnotutor->idUsuarioModifica) ?></td>
                    <td><?= h($alumnotutor->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnotutor->idAlumnoTutor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnotutor->idAlumnoTutor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnotutor->idAlumnoTutor], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnotutor->idAlumnoTutor)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
