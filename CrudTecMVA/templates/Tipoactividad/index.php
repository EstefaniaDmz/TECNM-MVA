<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipoactividad> $tipoactividad
 */
?>
<div class="tipoactividad index content">
    <?= $this->Html->link(__('New Tipoactividad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoactividad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoActividad') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoactividad as $tipoactividad): ?>
                <tr>
                    <td><?= $this->Number->format($tipoactividad->idTipoActividad) ?></td>
                    <td><?= h($tipoactividad->estatus) ?></td>
                    <td><?= $this->Number->format($tipoactividad->idUsuarioCrea) ?></td>
                    <td><?= h($tipoactividad->fechaCrea) ?></td>
                    <td><?= $tipoactividad->idUsuarioModifica === null ? '' : $this->Number->format($tipoactividad->idUsuarioModifica) ?></td>
                    <td><?= h($tipoactividad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoactividad->idTipoActividad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoactividad->idTipoActividad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoactividad->idTipoActividad], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoactividad->idTipoActividad)]) ?>
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
