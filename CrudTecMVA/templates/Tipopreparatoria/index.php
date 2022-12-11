<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipopreparatorium> $tipopreparatoria
 */
?>
<div class="tipopreparatoria index content">
    <?= $this->Html->link(__('New Tipopreparatorium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipopreparatoria') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoPreparatoria') ?></th>
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
                <?php foreach ($tipopreparatoria as $tipopreparatorium): ?>
                <tr>
                    <td><?= $this->Number->format($tipopreparatorium->idTipoPreparatoria) ?></td>
                    <td><?= h($tipopreparatorium->nombre) ?></td>
                    <td><?= h($tipopreparatorium->estatus) ?></td>
                    <td><?= $this->Number->format($tipopreparatorium->idUsuarioCrea) ?></td>
                    <td><?= h($tipopreparatorium->fechaCrea) ?></td>
                    <td><?= $this->Number->format($tipopreparatorium->idUsuarioModifica) ?></td>
                    <td><?= h($tipopreparatorium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipopreparatorium->idTipoPreparatoria]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipopreparatorium->idTipoPreparatoria]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipopreparatorium->idTipoPreparatoria], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopreparatorium->idTipoPreparatoria)]) ?>
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
