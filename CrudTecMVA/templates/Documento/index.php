<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Documento> $documento
 */
?>
<div class="documento index content">
    <?= $this->Html->link(__('New Documento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Documento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idDocumento') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('idTipoDocumento') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documento as $documento): ?>
                <tr>
                    <td><?= $this->Number->format($documento->idDocumento) ?></td>
                    <td><?= h($documento->nombre) ?></td>
                    <td><?= h($documento->descripcion) ?></td>
                    <td><?= $this->Number->format($documento->idTipoDocumento) ?></td>
                    <td><?= h($documento->estatus) ?></td>
                    <td><?= $this->Number->format($documento->idUsuarioCrea) ?></td>
                    <td><?= h($documento->fechaCrea) ?></td>
                    <td><?= $documento->idUsuarioModifica === null ? '' : $this->Number->format($documento->idUsuarioModifica) ?></td>
                    <td><?= h($documento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $documento->idDocumento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documento->idDocumento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documento->idDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $documento->idDocumento)]) ?>
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
