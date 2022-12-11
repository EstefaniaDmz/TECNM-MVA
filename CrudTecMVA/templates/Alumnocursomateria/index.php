<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumnocursomaterium> $alumnocursomateria
 */
?>
<div class="alumnocursomateria index content">
    <?= $this->Html->link(__('New Alumnocursomaterium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnocursomateria') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumnoCursoMateria') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idCurso') ?></th>
                    <th><?= $this->Paginator->sort('idMateria') ?></th>
                    <th><?= $this->Paginator->sort('calificacion') ?></th>
                    <th><?= $this->Paginator->sort('idPeriodo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnocursomateria as $alumnocursomaterium): ?>
                <tr>
                    <td><?= $this->Number->format($alumnocursomaterium->idAlumnoCursoMateria) ?></td>
                    <td><?= $this->Number->format($alumnocursomaterium->idAlumno) ?></td>
                    <td><?= $this->Number->format($alumnocursomaterium->idCurso) ?></td>
                    <td><?= $alumnocursomaterium->idMateria === null ? '' : $this->Number->format($alumnocursomaterium->idMateria) ?></td>
                    <td><?= $this->Number->format($alumnocursomaterium->calificacion) ?></td>
                    <td><?= $this->Number->format($alumnocursomaterium->idPeriodo) ?></td>
                    <td><?= h($alumnocursomaterium->estatus) ?></td>
                    <td><?= $alumnocursomaterium->idUsuarioCrea === null ? '' : $this->Number->format($alumnocursomaterium->idUsuarioCrea) ?></td>
                    <td><?= h($alumnocursomaterium->fechaCrea) ?></td>
                    <td><?= $alumnocursomaterium->idUsuarioModifica === null ? '' : $this->Number->format($alumnocursomaterium->idUsuarioModifica) ?></td>
                    <td><?= h($alumnocursomaterium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnocursomaterium->idAlumnoCursoMateria]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnocursomaterium->idAlumnoCursoMateria]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnocursomaterium->idAlumnoCursoMateria], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnocursomaterium->idAlumnoCursoMateria)]) ?>
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
