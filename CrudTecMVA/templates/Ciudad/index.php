<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ciudad> $ciudad
 */
?>
<div class="ciudad index content">
    <?= $this->Html->link(__('New Ciudad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ciudad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCiudad') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('idEstado') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ciudad as $ciudad): ?>
                <tr>
                    <td><?= $this->Number->format($ciudad->idCiudad) ?></td>
                    <td><?= h($ciudad->nombre) ?></td>
                    <td><?= $this->Number->format($ciudad->codigo) ?></td>
                    <td><?= $this->Number->format($ciudad->idEstado) ?></td>
                    <td><?= h($ciudad->estatus) ?></td>
                    <td><?= $this->Number->format($ciudad->idUsuarioCrea) ?></td>
                    <td><?= h($ciudad->fechaCrea) ?></td>
                    <td><?= $ciudad->idUsuarioModifica === null ? '' : $this->Number->format($ciudad->idUsuarioModifica) ?></td>
                    <td><?= h($ciudad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ciudad->idCiudad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ciudad->idCiudad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciudad->idCiudad], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudad->idCiudad)]) ?>
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
