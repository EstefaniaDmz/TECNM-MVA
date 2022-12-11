<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Software> $software
 */
?>
<div class="software index content">
    <?= $this->Html->link(__('New Software'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Software') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSoftware') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('version') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($software as $software): ?>
                <tr>
                    <td><?= $this->Number->format($software->idSoftware) ?></td>
                    <td><?= h($software->nombre) ?></td>
                    <td><?= h($software->marca) ?></td>
                    <td><?= h($software->version) ?></td>
                    <td><?= h($software->descripcion) ?></td>
                    <td><?= h($software->estatus) ?></td>
                    <td><?= $software->idUsuarioCrea === null ? '' : $this->Number->format($software->idUsuarioCrea) ?></td>
                    <td><?= h($software->fechaCrea) ?></td>
                    <td><?= $software->idUsuarioModifica === null ? '' : $this->Number->format($software->idUsuarioModifica) ?></td>
                    <td><?= h($software->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $software->idSoftware]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $software->idSoftware]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $software->idSoftware], ['confirm' => __('Are you sure you want to delete # {0}?', $software->idSoftware)]) ?>
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
