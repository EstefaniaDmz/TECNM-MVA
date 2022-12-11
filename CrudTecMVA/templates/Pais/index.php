<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pai> $pais
 */
?>
<div class="pais index content">
    <?= $this->Html->link(__('New Pai'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pais') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPais') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pais as $pai): ?>
                <tr>
                    <td><?= $this->Number->format($pai->idPais) ?></td>
                    <td><?= h($pai->estatus) ?></td>
                    <td><?= $this->Number->format($pai->idUsuarioCrea) ?></td>
                    <td><?= h($pai->fechaCrea) ?></td>
                    <td><?= $pai->idUsuarioModifica === null ? '' : $this->Number->format($pai->idUsuarioModifica) ?></td>
                    <td><?= h($pai->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pai->idPais]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pai->idPais]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pai->idPais], ['confirm' => __('Are you sure you want to delete # {0}?', $pai->idPais)]) ?>
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
