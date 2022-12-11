<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipopago> $tipopago
 */
?>
<div class="tipopago index content">
    <?= $this->Html->link(__('New Tipopago'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipopago') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoPago') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipopago as $tipopago): ?>
                <tr>
                    <td><?= $this->Number->format($tipopago->idTipoPago) ?></td>
                    <td><?= h($tipopago->estatus) ?></td>
                    <td><?= $this->Number->format($tipopago->idUsuarioCrea) ?></td>
                    <td><?= h($tipopago->fechaCrea) ?></td>
                    <td><?= $tipopago->idUsuarioModifica === null ? '' : $this->Number->format($tipopago->idUsuarioModifica) ?></td>
                    <td><?= h($tipopago->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipopago->idTipoPago]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipopago->idTipoPago]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipopago->idTipoPago], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopago->idTipoPago)]) ?>
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
