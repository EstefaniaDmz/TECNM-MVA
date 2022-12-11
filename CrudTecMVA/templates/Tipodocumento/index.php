<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipodocumento> $tipodocumento
 */
?>
<div class="tipodocumento index content">
    <?= $this->Html->link(__('New Tipodocumento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipodocumento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoDocumento') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipodocumento as $tipodocumento): ?>
                <tr>
                    <td><?= $this->Number->format($tipodocumento->idTipoDocumento) ?></td>
                    <td><?= h($tipodocumento->nombre) ?></td>
                    <td><?= h($tipodocumento->estatus) ?></td>
                    <td><?= $this->Number->format($tipodocumento->idUsuarioCrea) ?></td>
                    <td><?= h($tipodocumento->fechaCrea) ?></td>
                    <td><?= $tipodocumento->idUsuarioModifica === null ? '' : $this->Number->format($tipodocumento->idUsuarioModifica) ?></td>
                    <td><?= h($tipodocumento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipodocumento->idTipoDocumento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipodocumento->idTipoDocumento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipodocumento->idTipoDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodocumento->idTipoDocumento)]) ?>
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
