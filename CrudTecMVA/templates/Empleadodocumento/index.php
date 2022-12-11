<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empleadodocumento> $empleadodocumento
 */
?>
<div class="empleadodocumento index content">
    <?= $this->Html->link(__('New Empleadodocumento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleadodocumento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEmpleadoDocumento') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idDocumento') ?></th>
                    <th><?= $this->Paginator->sort('fechaEntrega') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleadodocumento as $empleadodocumento): ?>
                <tr>
                    <td><?= $this->Number->format($empleadodocumento->idEmpleadoDocumento) ?></td>
                    <td><?= $this->Number->format($empleadodocumento->idEmpleado) ?></td>
                    <td><?= $this->Number->format($empleadodocumento->idDocumento) ?></td>
                    <td><?= h($empleadodocumento->fechaEntrega) ?></td>
                    <td><?= h($empleadodocumento->estatus) ?></td>
                    <td><?= $empleadodocumento->idUsuarioCrea === null ? '' : $this->Number->format($empleadodocumento->idUsuarioCrea) ?></td>
                    <td><?= h($empleadodocumento->fechaCrea) ?></td>
                    <td><?= $empleadodocumento->idUsuarioModifica === null ? '' : $this->Number->format($empleadodocumento->idUsuarioModifica) ?></td>
                    <td><?= h($empleadodocumento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleadodocumento->idEmpleadoDocumento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleadodocumento->idEmpleadoDocumento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleadodocumento->idEmpleadoDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadodocumento->idEmpleadoDocumento)]) ?>
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
