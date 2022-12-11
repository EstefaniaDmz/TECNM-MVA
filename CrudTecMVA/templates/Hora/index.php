<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Hora> $hora
 */
?>
<div class="hora index content">
    <?= $this->Html->link(__('New Hora'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hora') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idHora') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hora as $hora): ?>
                <tr>
                    <td><?= $this->Number->format($hora->idHora) ?></td>
                    <td><?= h($hora->estatus) ?></td>
                    <td><?= $this->Number->format($hora->idUsuarioCrea) ?></td>
                    <td><?= h($hora->fechaCrea) ?></td>
                    <td><?= $hora->idUsuarioModifica === null ? '' : $this->Number->format($hora->idUsuarioModifica) ?></td>
                    <td><?= h($hora->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hora->idHora]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hora->idHora]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hora->idHora], ['confirm' => __('Are you sure you want to delete # {0}?', $hora->idHora)]) ?>
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
