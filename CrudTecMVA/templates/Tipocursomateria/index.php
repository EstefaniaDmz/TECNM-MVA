<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipocursomaterium> $tipocursomateria
 */
?>
<div class="tipocursomateria index content">
    <?= $this->Html->link(__('New Tipocursomaterium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipocursomateria') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoCursoMateria') ?></th>
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
                <?php foreach ($tipocursomateria as $tipocursomaterium): ?>
                <tr>
                    <td><?= $this->Number->format($tipocursomaterium->idTipoCursoMateria) ?></td>
                    <td><?= h($tipocursomaterium->nombre) ?></td>
                    <td><?= h($tipocursomaterium->estatus) ?></td>
                    <td><?= $this->Number->format($tipocursomaterium->idUsuarioCrea) ?></td>
                    <td><?= h($tipocursomaterium->fechaCrea) ?></td>
                    <td><?= $tipocursomaterium->idUsuarioModifica === null ? '' : $this->Number->format($tipocursomaterium->idUsuarioModifica) ?></td>
                    <td><?= h($tipocursomaterium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipocursomaterium->idTipoCursoMateria]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipocursomaterium->idTipoCursoMateria]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipocursomaterium->idTipoCursoMateria], ['confirm' => __('Are you sure you want to delete # {0}?', $tipocursomaterium->idTipoCursoMateria)]) ?>
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
