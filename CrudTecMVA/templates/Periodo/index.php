<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Periodo> $periodo
 */
?>
<div class="periodo index content">
    <?= $this->Html->link(__('New Periodo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Periodo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
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
                <?php foreach ($periodo as $periodo): ?>
                <tr>
                    <td><?= $this->Number->format($periodo->idPeriodo) ?></td>
                    <td><?= h($periodo->estatus) ?></td>
                    <td><?= $this->Number->format($periodo->idUsuarioCrea) ?></td>
                    <td><?= h($periodo->fechaCrea) ?></td>
                    <td><?= $periodo->idUsuarioModifica === null ? '' : $this->Number->format($periodo->idUsuarioModifica) ?></td>
                    <td><?= h($periodo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $periodo->idPeriodo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $periodo->idPeriodo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $periodo->idPeriodo], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->idPeriodo)]) ?>
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
