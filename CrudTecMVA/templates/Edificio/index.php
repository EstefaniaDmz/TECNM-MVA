<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Edificio> $edificio
 */
?>
<div class="edificio index content">
    <?= $this->Html->link(__('New Edificio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Edificio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEdificio') ?></th>
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
                <?php foreach ($edificio as $edificio): ?>
                <tr>
                    <td><?= $this->Number->format($edificio->idEdificio) ?></td>
                    <td><?= h($edificio->nombre) ?></td>
                    <td><?= h($edificio->estatus) ?></td>
                    <td><?= $this->Number->format($edificio->idUsuarioCrea) ?></td>
                    <td><?= h($edificio->fechaCrea) ?></td>
                    <td><?= $edificio->idUsuarioModifica === null ? '' : $this->Number->format($edificio->idUsuarioModifica) ?></td>
                    <td><?= h($edificio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $edificio->idEdificio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $edificio->idEdificio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $edificio->idEdificio], ['confirm' => __('Are you sure you want to delete # {0}?', $edificio->idEdificio)]) ?>
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
