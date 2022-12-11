<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Puesto> $puesto
 */
?>
<div class="puesto index content">
    <?= $this->Html->link(__('New Puesto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Puesto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPuesto') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($puesto as $puesto): ?>
                <tr>
                    <td><?= $this->Number->format($puesto->idPuesto) ?></td>
                    <td><?= h($puesto->estatus) ?></td>
                    <td><?= $this->Number->format($puesto->idUsuarioCrea) ?></td>
                    <td><?= h($puesto->fechaCrea) ?></td>
                    <td><?= $puesto->idUsuarioModifica === null ? '' : $this->Number->format($puesto->idUsuarioModifica) ?></td>
                    <td><?= h($puesto->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $puesto->idPuesto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $puesto->idPuesto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $puesto->idPuesto], ['confirm' => __('Are you sure you want to delete # {0}?', $puesto->idPuesto)]) ?>
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
