<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumnoasignaturadocente> $alumnoasignaturadocente
 */
?>
<div class="alumnoasignaturadocente index content">
    <?= $this->Html->link(__('New Alumnoasignaturadocente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnoasignaturadocente') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumnoAsignaturaDocente') ?></th>
                    <th><?= $this->Paginator->sort('idAsignaturaDocente') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnoasignaturadocente as $alumnoasignaturadocente): ?>
                <tr>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idAlumnoAsignaturaDocente) ?></td>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idAsignaturaDocente) ?></td>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idAlumno) ?></td>
                    <td><?= h($alumnoasignaturadocente->estatus) ?></td>
                    <td><?= $this->Number->format($alumnoasignaturadocente->idUsuarioCrea) ?></td>
                    <td><?= h($alumnoasignaturadocente->fechaCrea) ?></td>
                    <td><?= $alumnoasignaturadocente->idUsuarioModifica === null ? '' : $this->Number->format($alumnoasignaturadocente->idUsuarioModifica) ?></td>
                    <td><?= h($alumnoasignaturadocente->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnoasignaturadocente->idAlumnoAsignaturaDocente]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnoasignaturadocente->idAlumnoAsignaturaDocente]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnoasignaturadocente->idAlumnoAsignaturaDocente], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoasignaturadocente->idAlumnoAsignaturaDocente)]) ?>
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
