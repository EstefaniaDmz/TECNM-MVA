<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Institucionsalud> $institucionsalud
 */
?>
<div class="institucionsalud index content">
    <?= $this->Html->link(__('New Institucionsalud'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Institucionsalud') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idInstitucionSalud') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($institucionsalud as $institucionsalud): ?>
                <tr>
                    <td><?= $this->Number->format($institucionsalud->idInstitucionSalud) ?></td>
                    <td><?= h($institucionsalud->estatus) ?></td>
                    <td><?= $this->Number->format($institucionsalud->idUsuarioCrea) ?></td>
                    <td><?= h($institucionsalud->fechaCrea) ?></td>
                    <td><?= $institucionsalud->idUsuarioModifica === null ? '' : $this->Number->format($institucionsalud->idUsuarioModifica) ?></td>
                    <td><?= h($institucionsalud->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $institucionsalud->idInstitucionSalud]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $institucionsalud->idInstitucionSalud]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $institucionsalud->idInstitucionSalud], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionsalud->idInstitucionSalud)]) ?>
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
