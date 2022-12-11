<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Solicitudconsumible> $solicitudconsumible
 */
?>
<div class="solicitudconsumible index content">
    <?= $this->Html->link(__('New Solicitudconsumible'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solicitudconsumible') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSolicitudConsumible') ?></th>
                    <th><?= $this->Paginator->sort('idSolicitudLaboratorio') ?></th>
                    <th><?= $this->Paginator->sort('idConsumible') ?></th>
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
                <?php foreach ($solicitudconsumible as $solicitudconsumible): ?>
                <tr>
                    <td><?= $this->Number->format($solicitudconsumible->idSolicitudConsumible) ?></td>
                    <td><?= $this->Number->format($solicitudconsumible->idSolicitudLaboratorio) ?></td>
                    <td><?= $solicitudconsumible->idConsumible === null ? '' : $this->Number->format($solicitudconsumible->idConsumible) ?></td>
                    <td><?= h($solicitudconsumible->notas) ?></td>
                    <td><?= $solicitudconsumible->estatus === null ? '' : $this->Number->format($solicitudconsumible->estatus) ?></td>
                    <td><?= $solicitudconsumible->idUsuarioCrea === null ? '' : $this->Number->format($solicitudconsumible->idUsuarioCrea) ?></td>
                    <td><?= h($solicitudconsumible->fechaCrea) ?></td>
                    <td><?= $solicitudconsumible->idUsuarioModifica === null ? '' : $this->Number->format($solicitudconsumible->idUsuarioModifica) ?></td>
                    <td><?= h($solicitudconsumible->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solicitudconsumible->idSolicitudConsumible]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitudconsumible->idSolicitudConsumible]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitudconsumible->idSolicitudConsumible], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudconsumible->idSolicitudConsumible)]) ?>
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
