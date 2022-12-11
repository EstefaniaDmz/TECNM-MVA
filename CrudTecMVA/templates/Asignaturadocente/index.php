<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Asignaturadocente> $asignaturadocente
 */
?>
<div class="asignaturadocente index content">
    <?= $this->Html->link(__('New Asignaturadocente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Asignaturadocente') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAsignaturaDocente') ?></th>
                    <th><?= $this->Paginator->sort('idAsignatura') ?></th>
                    <th><?= $this->Paginator->sort('idDocente') ?></th>
                    <th><?= $this->Paginator->sort('idHora') ?></th>
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
                <?php foreach ($asignaturadocente as $asignaturadocente): ?>
                <tr>
                    <td><?= $this->Number->format($asignaturadocente->idAsignaturaDocente) ?></td>
                    <td><?= $this->Number->format($asignaturadocente->idAsignatura) ?></td>
                    <td><?= $this->Number->format($asignaturadocente->idDocente) ?></td>
                    <td><?= $this->Number->format($asignaturadocente->idHora) ?></td>
                    <td><?= $this->Number->format($asignaturadocente->idPeriodo) ?></td>
                    <td><?= h($asignaturadocente->estatus) ?></td>
                    <td><?= $this->Number->format($asignaturadocente->idUsuarioCrea) ?></td>
                    <td><?= h($asignaturadocente->fechaCrea) ?></td>
                    <td><?= $asignaturadocente->idUsuarioModifica === null ? '' : $this->Number->format($asignaturadocente->idUsuarioModifica) ?></td>
                    <td><?= h($asignaturadocente->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $asignaturadocente->idAsignaturaDocente]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asignaturadocente->idAsignaturaDocente]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asignaturadocente->idAsignaturaDocente], ['confirm' => __('Are you sure you want to delete # {0}?', $asignaturadocente->idAsignaturaDocente)]) ?>
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
