<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Justificante> $justificante
 */
?>
<div class="justificante index content">
    <?= $this->Html->link(__('New Justificante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Justificante') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idJustificante') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('motivo') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($justificante as $justificante): ?>
                <tr>
                    <td><?= $this->Number->format($justificante->idJustificante) ?></td>
                    <td><?= $this->Number->format($justificante->idAlumno) ?></td>
                    <td><?= h($justificante->motivo) ?></td>
                    <td><?= h($justificante->fecha) ?></td>
                    <td><?= $justificante->estatus === null ? '' : $this->Number->format($justificante->estatus) ?></td>
                    <td><?= $justificante->idUsuarioCrea === null ? '' : $this->Number->format($justificante->idUsuarioCrea) ?></td>
                    <td><?= h($justificante->fechaCrea) ?></td>
                    <td><?= $justificante->idUsuarioModifica === null ? '' : $this->Number->format($justificante->idUsuarioModifica) ?></td>
                    <td><?= h($justificante->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $justificante->idJustificante]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $justificante->idJustificante]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $justificante->idJustificante], ['confirm' => __('Are you sure you want to delete # {0}?', $justificante->idJustificante)]) ?>
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
