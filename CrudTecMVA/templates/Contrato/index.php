<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contrato> $contrato
 */
?>
<div class="contrato index content">
    <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contrato') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idContrato') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('cantidadHoras') ?></th>
                    <th><?= $this->Paginator->sort('duracion') ?></th>
                    <th><?= $this->Paginator->sort('salario') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contrato as $contrato): ?>
                <tr>
                    <td><?= $this->Number->format($contrato->idContrato) ?></td>
                    <td><?= h($contrato->fechaInicio) ?></td>
                    <td><?= h($contrato->fechaFinal) ?></td>
                    <td><?= $this->Number->format($contrato->cantidadHoras) ?></td>
                    <td><?= $this->Number->format($contrato->duracion) ?></td>
                    <td><?= $this->Number->format($contrato->salario) ?></td>
                    <td><?= $this->Number->format($contrato->idEmpleado) ?></td>
                    <td><?= $contrato->estatus === null ? '' : $this->Number->format($contrato->estatus) ?></td>
                    <td><?= $contrato->idUsuarioCrea === null ? '' : $this->Number->format($contrato->idUsuarioCrea) ?></td>
                    <td><?= h($contrato->fechaCrea) ?></td>
                    <td><?= $contrato->idUsuarioModifica === null ? '' : $this->Number->format($contrato->idUsuarioModifica) ?></td>
                    <td><?= h($contrato->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->idContrato]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->idContrato]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->idContrato], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idContrato)]) ?>
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
