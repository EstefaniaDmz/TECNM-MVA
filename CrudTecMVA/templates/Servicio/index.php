<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Servicio> $servicio
 */
?>
<div class="servicio index content">
    <?= $this->Html->link(__('New Servicio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Servicio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idServicio') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('idTipoServicio') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicio as $servicio): ?>
                <tr>
                    <td><?= $this->Number->format($servicio->idServicio) ?></td>
                    <td><?= h($servicio->nombre) ?></td>
                    <td><?= $this->Number->format($servicio->idTipoServicio) ?></td>
                    <td><?= h($servicio->estatus) ?></td>
                    <td><?= $this->Number->format($servicio->idUsuarioCrea) ?></td>
                    <td><?= h($servicio->fechaCrea) ?></td>
                    <td><?= $servicio->idUsuarioModifica === null ? '' : $this->Number->format($servicio->idUsuarioModifica) ?></td>
                    <td><?= h($servicio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $servicio->idServicio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicio->idServicio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicio->idServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->idServicio)]) ?>
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
