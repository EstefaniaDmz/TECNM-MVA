<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estado> $estado
 */
?>
<div class="estado index content">
    <?= $this->Html->link(__('New Estado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEstado') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estado as $estado): ?>
                <tr>
                    <td><?= $this->Number->format($estado->idEstado) ?></td>
                    <td><?= h($estado->nombre) ?></td>
                    <td><?= h($estado->estatus) ?></td>
                    <td><?= $this->Number->format($estado->idUsuarioCrea) ?></td>
                    <td><?= h($estado->fechaCrea) ?></td>
                    <td><?= $estado->idUsuarioModifica === null ? '' : $this->Number->format($estado->idUsuarioModifica) ?></td>
                    <td><?= h($estado->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estado->idEstado]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estado->idEstado]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estado->idEstado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado)]) ?>
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
