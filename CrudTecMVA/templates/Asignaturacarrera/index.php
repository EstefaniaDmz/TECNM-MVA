<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Asignaturacarrera> $asignaturacarrera
 */
?>
<div class="asignaturacarrera index content">
    <?= $this->Html->link(__('New Asignaturacarrera'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Asignaturacarrera') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAsignaturaCarrera') ?></th>
                    <th><?= $this->Paginator->sort('idAsignatura') ?></th>
                    <th><?= $this->Paginator->sort('idCarrera') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asignaturacarrera as $asignaturacarrera): ?>
                <tr>
                    <td><?= $this->Number->format($asignaturacarrera->idAsignaturaCarrera) ?></td>
                    <td><?= $this->Number->format($asignaturacarrera->idAsignatura) ?></td>
                    <td><?= $this->Number->format($asignaturacarrera->idCarrera) ?></td>
                    <td><?= h($asignaturacarrera->estatus) ?></td>
                    <td><?= $this->Number->format($asignaturacarrera->idUsuarioCrea) ?></td>
                    <td><?= h($asignaturacarrera->fechaCrea) ?></td>
                    <td><?= $this->Number->format($asignaturacarrera->idUsuarioModifica) ?></td>
                    <td><?= h($asignaturacarrera->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $asignaturacarrera->idAsignaturaCarrera]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asignaturacarrera->idAsignaturaCarrera]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asignaturacarrera->idAsignaturaCarrera], ['confirm' => __('Are you sure you want to delete # {0}?', $asignaturacarrera->idAsignaturaCarrera)]) ?>
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
