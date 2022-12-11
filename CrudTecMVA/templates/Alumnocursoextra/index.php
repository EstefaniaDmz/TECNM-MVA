<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumnocursoextra> $alumnocursoextra
 */
?>
<div class="alumnocursoextra index content">
    <?= $this->Html->link(__('New Alumnocursoextra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnocursoextra') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumnoCursoExtra') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idCursoExtraordinario') ?></th>
                    <th><?= $this->Paginator->sort('idPago') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnocursoextra as $alumnocursoextra): ?>
                <tr>
                    <td><?= $this->Number->format($alumnocursoextra->idAlumnoCursoExtra) ?></td>
                    <td><?= $this->Number->format($alumnocursoextra->idAlumno) ?></td>
                    <td><?= $this->Number->format($alumnocursoextra->idCursoExtraordinario) ?></td>
                    <td><?= $this->Number->format($alumnocursoextra->idPago) ?></td>
                    <td><?= h($alumnocursoextra->estatus) ?></td>
                    <td><?= $this->Number->format($alumnocursoextra->idUsuarioCrea) ?></td>
                    <td><?= h($alumnocursoextra->fechaCrea) ?></td>
                    <td><?= $alumnocursoextra->idUsuarioModifica === null ? '' : $this->Number->format($alumnocursoextra->idUsuarioModifica) ?></td>
                    <td><?= h($alumnocursoextra->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnocursoextra->idAlumnoCursoExtra]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnocursoextra->idAlumnoCursoExtra]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnocursoextra->idAlumnoCursoExtra], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnocursoextra->idAlumnoCursoExtra)]) ?>
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
