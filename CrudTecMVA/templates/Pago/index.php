<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pago> $pago
 */
?>
<div class="pago index content">
    <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pago') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPago') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idTipoPago') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pago as $pago): ?>
                <tr>
                    <td><?= $this->Number->format($pago->idPago) ?></td>
                    <td><?= $this->Number->format($pago->idAlumno) ?></td>
                    <td><?= $this->Number->format($pago->idTipoPago) ?></td>
                    <td><?= h($pago->folio) ?></td>
                    <td><?= $this->Number->format($pago->monto) ?></td>
                    <td><?= h($pago->estatus) ?></td>
                    <td><?= $this->Number->format($pago->idUsuarioCrea) ?></td>
                    <td><?= h($pago->fechaCrea) ?></td>
                    <td><?= $pago->idUsuarioModifica === null ? '' : $this->Number->format($pago->idUsuarioModifica) ?></td>
                    <td><?= h($pago->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pago->idPago]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pago->idPago]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pago->idPago], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago)]) ?>
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
