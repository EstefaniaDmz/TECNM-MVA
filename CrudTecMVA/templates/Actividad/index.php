<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Actividad> $actividad
 */
?>
<div class="actividad index content">
    <?= $this->Html->link(__('New Actividad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Actividad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idActividad') ?></th>
                    <th><?= $this->Paginator->sort('idTipoActividad') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('creditoValor') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($actividad as $actividad): ?>
                <tr>
                    <td><?= $this->Number->format($actividad->idActividad) ?></td>
                    <td><?= $actividad->idTipoActividad === null ? '' : $this->Number->format($actividad->idTipoActividad) ?></td>
                    <td><?= h($actividad->nombre) ?></td>
                    <td><?= $this->Number->format($actividad->creditoValor) ?></td>
                    <td><?= $actividad->estatus === null ? '' : $this->Number->format($actividad->estatus) ?></td>
                    <td><?= $actividad->idUsuarioCrea === null ? '' : $this->Number->format($actividad->idUsuarioCrea) ?></td>
                    <td><?= h($actividad->fechaCrea) ?></td>
                    <td><?= $actividad->idUsuarioModifica === null ? '' : $this->Number->format($actividad->idUsuarioModifica) ?></td>
                    <td><?= h($actividad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $actividad->idActividad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actividad->idActividad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actividad->idActividad], ['confirm' => __('Are you sure you want to delete # {0}?', $actividad->idActividad)]) ?>
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
