<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipoorganizacion> $tipoorganizacion
 */
?>
<div class="tipoorganizacion index content">
    <?= $this->Html->link(__('New Tipoorganizacion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoorganizacion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoOrganizacion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoorganizacion as $tipoorganizacion): ?>
                <tr>
                    <td><?= $this->Number->format($tipoorganizacion->idTipoOrganizacion) ?></td>
                    <td><?= h($tipoorganizacion->estatus) ?></td>
                    <td><?= $this->Number->format($tipoorganizacion->idUsuarioCrea) ?></td>
                    <td><?= h($tipoorganizacion->fechaCrea) ?></td>
                    <td><?= $tipoorganizacion->idUsuarioModifica === null ? '' : $this->Number->format($tipoorganizacion->idUsuarioModifica) ?></td>
                    <td><?= h($tipoorganizacion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoorganizacion->idTipoOrganizacion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoorganizacion->idTipoOrganizacion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoorganizacion->idTipoOrganizacion], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoorganizacion->idTipoOrganizacion)]) ?>
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
