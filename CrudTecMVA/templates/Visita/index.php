<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Visitum> $visita
 */
?>
<div class="visita index content">
    <?= $this->Html->link(__('New Visitum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visita') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idVisita') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idCarrera') ?></th>
                    <th><?= $this->Paginator->sort('numeroAlumnos') ?></th>
                    <th><?= $this->Paginator->sort('semestre') ?></th>
                    <th><?= $this->Paginator->sort('fechaSolicitada') ?></th>
                    <th><?= $this->Paginator->sort('empresaPropuesta') ?></th>
                    <th><?= $this->Paginator->sort('idActivoFijo') ?></th>
                    <th><?= $this->Paginator->sort('objetivo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visita as $visitum): ?>
                <tr>
                    <td><?= $this->Number->format($visitum->idVisita) ?></td>
                    <td><?= $this->Number->format($visitum->idEmpleado) ?></td>
                    <td><?= $this->Number->format($visitum->idCarrera) ?></td>
                    <td><?= $this->Number->format($visitum->numeroAlumnos) ?></td>
                    <td><?= $this->Number->format($visitum->semestre) ?></td>
                    <td><?= h($visitum->fechaSolicitada) ?></td>
                    <td><?= h($visitum->empresaPropuesta) ?></td>
                    <td><?= $this->Number->format($visitum->idActivoFijo) ?></td>
                    <td><?= h($visitum->objetivo) ?></td>
                    <td><?= $visitum->estatus === null ? '' : $this->Number->format($visitum->estatus) ?></td>
                    <td><?= $this->Number->format($visitum->idUsuarioCrea) ?></td>
                    <td><?= h($visitum->fechaCrea) ?></td>
                    <td><?= $this->Number->format($visitum->idUsuarioModifica) ?></td>
                    <td><?= h($visitum->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visitum->idVisita]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitum->idVisita]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitum->idVisita], ['confirm' => __('Are you sure you want to delete # {0}?', $visitum->idVisita)]) ?>
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
