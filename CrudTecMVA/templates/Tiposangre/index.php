<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tiposangre> $tiposangre
 */
?>
<div class="tiposangre index content">
    <?= $this->Html->link(__('New Tiposangre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tiposangre') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoSangre') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiposangre as $tiposangre): ?>
                <tr>
                    <td><?= $this->Number->format($tiposangre->idTipoSangre) ?></td>
                    <td><?= h($tiposangre->estatus) ?></td>
                    <td><?= $this->Number->format($tiposangre->idUsuarioCrea) ?></td>
                    <td><?= h($tiposangre->fechaCrea) ?></td>
                    <td><?= $tiposangre->idUsuarioModifica === null ? '' : $this->Number->format($tiposangre->idUsuarioModifica) ?></td>
                    <td><?= h($tiposangre->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tiposangre->idTipoSangre]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposangre->idTipoSangre]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposangre->idTipoSangre], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposangre->idTipoSangre)]) ?>
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
