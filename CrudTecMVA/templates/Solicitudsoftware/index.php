<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Solicitudsoftware> $solicitudsoftware
 */
?>
<div class="solicitudsoftware index content">
    <?= $this->Html->link(__('New Solicitudsoftware'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solicitudsoftware') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSolicitudSoftware') ?></th>
                    <th><?= $this->Paginator->sort('idSolicitudLaboratorio') ?></th>
                    <th><?= $this->Paginator->sort('idSoftware') ?></th>
                    <th><?= $this->Paginator->sort('notas') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitudsoftware as $solicitudsoftware): ?>
                <tr>
                    <td><?= $this->Number->format($solicitudsoftware->idSolicitudSoftware) ?></td>
                    <td><?= $this->Number->format($solicitudsoftware->idSolicitudLaboratorio) ?></td>
                    <td><?= $solicitudsoftware->idSoftware === null ? '' : $this->Number->format($solicitudsoftware->idSoftware) ?></td>
                    <td><?= h($solicitudsoftware->notas) ?></td>
                    <td><?= $solicitudsoftware->estatus === null ? '' : $this->Number->format($solicitudsoftware->estatus) ?></td>
                    <td><?= $solicitudsoftware->idUsuarioCrea === null ? '' : $this->Number->format($solicitudsoftware->idUsuarioCrea) ?></td>
                    <td><?= h($solicitudsoftware->fechaCrea) ?></td>
                    <td><?= $solicitudsoftware->idUsuarioModifica === null ? '' : $this->Number->format($solicitudsoftware->idUsuarioModifica) ?></td>
                    <td><?= h($solicitudsoftware->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solicitudsoftware->idSolicitudSoftware]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitudsoftware->idSolicitudSoftware]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitudsoftware->idSolicitudSoftware], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudsoftware->idSolicitudSoftware)]) ?>
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
