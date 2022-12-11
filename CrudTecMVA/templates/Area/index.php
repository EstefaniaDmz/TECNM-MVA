<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Area> $area
 */
?>
<div class="area index content">
    <?= $this->Html->link(__('New Area'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Area') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idArea') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('idEdificio') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($area as $area): ?>
                <tr>
                    <td><?= $this->Number->format($area->idArea) ?></td>
                    <td><?= h($area->nombre) ?></td>
                    <td><?= $this->Number->format($area->idEdificio) ?></td>
                    <td><?= h($area->estatus) ?></td>
                    <td><?= $area->idUsuarioCrea === null ? '' : $this->Number->format($area->idUsuarioCrea) ?></td>
                    <td><?= h($area->fechaCrea) ?></td>
                    <td><?= $area->idUsuarioModifica === null ? '' : $this->Number->format($area->idUsuarioModifica) ?></td>
                    <td><?= h($area->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $area->idArea]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $area->idArea]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $area->idArea], ['confirm' => __('Are you sure you want to delete # {0}?', $area->idArea)]) ?>
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
