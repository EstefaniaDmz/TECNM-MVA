<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipourgencium> $tipourgencia
 */
?>
<div class="tipourgencia index content">
    <?= $this->Html->link(__('New Tipourgencium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipourgencia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoUrgencia') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipourgencia as $tipourgencium): ?>
                <tr>
                    <td><?= $this->Number->format($tipourgencium->idTipoUrgencia) ?></td>
                    <td><?= h($tipourgencium->estatus) ?></td>
                    <td><?= $this->Number->format($tipourgencium->idUsuarioCrea) ?></td>
                    <td><?= h($tipourgencium->fechaCrea) ?></td>
                    <td><?= $tipourgencium->idUsuarioModifica === null ? '' : $this->Number->format($tipourgencium->idUsuarioModifica) ?></td>
                    <td><?= h($tipourgencium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipourgencium->idTipoUrgencia]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipourgencium->idTipoUrgencia]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipourgencium->idTipoUrgencia], ['confirm' => __('Are you sure you want to delete # {0}?', $tipourgencium->idTipoUrgencia)]) ?>
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
