<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Zona> $zona
 */
?>
<div class="zona index content">
    <?= $this->Html->link(__('New Zona'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Zona') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idZona') ?></th>
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
                <?php foreach ($zona as $zona): ?>
                <tr>
                    <td><?= $this->Number->format($zona->idZona) ?></td>
                    <td><?= h($zona->nombre) ?></td>
                    <td><?= h($zona->estatus) ?></td>
                    <td><?= $this->Number->format($zona->idUsuarioCrea) ?></td>
                    <td><?= h($zona->fechaCrea) ?></td>
                    <td><?= $zona->idUsuarioModifica === null ? '' : $this->Number->format($zona->idUsuarioModifica) ?></td>
                    <td><?= h($zona->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $zona->idZona]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zona->idZona]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zona->idZona], ['confirm' => __('Are you sure you want to delete # {0}?', $zona->idZona)]) ?>
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
