<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipoactivofijo> $tipoactivofijo
 */
?>
<div class="tipoactivofijo index content">
    <?= $this->Html->link(__('New Tipoactivofijo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoactivofijo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoActivoFijo') ?></th>
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
                <?php foreach ($tipoactivofijo as $tipoactivofijo): ?>
                <tr>
                    <td><?= $this->Number->format($tipoactivofijo->idTipoActivoFijo) ?></td>
                    <td><?= h($tipoactivofijo->nombre) ?></td>
                    <td><?= h($tipoactivofijo->estatus) ?></td>
                    <td><?= $tipoactivofijo->idUsuarioCrea === null ? '' : $this->Number->format($tipoactivofijo->idUsuarioCrea) ?></td>
                    <td><?= h($tipoactivofijo->fechaCrea) ?></td>
                    <td><?= $tipoactivofijo->idUsuarioModifica === null ? '' : $this->Number->format($tipoactivofijo->idUsuarioModifica) ?></td>
                    <td><?= h($tipoactivofijo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoactivofijo->idTipoActivoFijo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoactivofijo->idTipoActivoFijo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoactivofijo->idTipoActivoFijo], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoactivofijo->idTipoActivoFijo)]) ?>
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
