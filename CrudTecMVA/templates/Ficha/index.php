<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ficha> $ficha
 */
?>
<div class="ficha index content">
    <?= $this->Html->link(__('New Ficha'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ficha') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idFicha') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('idTurno') ?></th>
                    <th><?= $this->Paginator->sort('idCarreraPrimera') ?></th>
                    <th><?= $this->Paginator->sort('idCarreraSegunda') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ficha as $ficha): ?>
                <tr>
                    <td><?= $this->Number->format($ficha->idFicha) ?></td>
                    <td><?= h($ficha->folio) ?></td>
                    <td><?= h($ficha->fecha) ?></td>
                    <td><?= $this->Number->format($ficha->idTurno) ?></td>
                    <td><?= $this->Number->format($ficha->idCarreraPrimera) ?></td>
                    <td><?= $this->Number->format($ficha->idCarreraSegunda) ?></td>
                    <td><?= h($ficha->estatus) ?></td>
                    <td><?= $this->Number->format($ficha->idUsuarioCrea) ?></td>
                    <td><?= h($ficha->fechaCrea) ?></td>
                    <td><?= $this->Number->format($ficha->idUsuarioModifica) ?></td>
                    <td><?= h($ficha->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ficha->idFicha]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ficha->idFicha]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ficha->idFicha], ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->idFicha)]) ?>
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
