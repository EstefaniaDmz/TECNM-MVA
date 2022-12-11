<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Consumible> $consumible
 */
?>
<div class="consumible index content">
    <?= $this->Html->link(__('New Consumible'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Consumible') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idConsumible') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consumible as $consumible): ?>
                <tr>
                    <td><?= $this->Number->format($consumible->idConsumible) ?></td>
                    <td><?= h($consumible->nombre) ?></td>
                    <td><?= h($consumible->descripcion) ?></td>
                    <td><?= $this->Number->format($consumible->cantidad) ?></td>
                    <td><?= $consumible->estatus === null ? '' : $this->Number->format($consumible->estatus) ?></td>
                    <td><?= $consumible->idUsuarioCrea === null ? '' : $this->Number->format($consumible->idUsuarioCrea) ?></td>
                    <td><?= h($consumible->fechaCrea) ?></td>
                    <td><?= $consumible->idUsuarioModifica === null ? '' : $this->Number->format($consumible->idUsuarioModifica) ?></td>
                    <td><?= h($consumible->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $consumible->idConsumible]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consumible->idConsumible]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consumible->idConsumible], ['confirm' => __('Are you sure you want to delete # {0}?', $consumible->idConsumible)]) ?>
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
