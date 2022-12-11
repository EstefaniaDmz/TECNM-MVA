<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipoasentamiento> $tipoasentamiento
 */
?>
<div class="tipoasentamiento index content">
    <?= $this->Html->link(__('New Tipoasentamiento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoasentamiento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoAsentamiento') ?></th>
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
                <?php foreach ($tipoasentamiento as $tipoasentamiento): ?>
                <tr>
                    <td><?= $this->Number->format($tipoasentamiento->idTipoAsentamiento) ?></td>
                    <td><?= h($tipoasentamiento->nombre) ?></td>
                    <td><?= h($tipoasentamiento->estatus) ?></td>
                    <td><?= $this->Number->format($tipoasentamiento->idUsuarioCrea) ?></td>
                    <td><?= h($tipoasentamiento->fechaCrea) ?></td>
                    <td><?= $tipoasentamiento->idUsuarioModifica === null ? '' : $this->Number->format($tipoasentamiento->idUsuarioModifica) ?></td>
                    <td><?= h($tipoasentamiento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoasentamiento->idTipoAsentamiento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoasentamiento->idTipoAsentamiento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento)]) ?>
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
