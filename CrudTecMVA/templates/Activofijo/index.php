<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Activofijo> $activofijo
 */
?>
<div class="activofijo index content">
    <?= $this->Html->link(__('New Activofijo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activofijo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idActivoFijo') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('modelo') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('idArea') ?></th>
                    <th><?= $this->Paginator->sort('idTipoActivoFijo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activofijo as $activofijo): ?>
                <tr>
                    <td><?= $this->Number->format($activofijo->idActivoFijo) ?></td>
                    <td><?= h($activofijo->nombre) ?></td>
                    <td><?= h($activofijo->marca) ?></td>
                    <td><?= h($activofijo->modelo) ?></td>
                    <td><?= h($activofijo->descripcion) ?></td>
                    <td><?= $this->Number->format($activofijo->idArea) ?></td>
                    <td><?= $this->Number->format($activofijo->idTipoActivoFijo) ?></td>
                    <td><?= h($activofijo->estatus) ?></td>
                    <td><?= $activofijo->idUsuarioCrea === null ? '' : $this->Number->format($activofijo->idUsuarioCrea) ?></td>
                    <td><?= h($activofijo->fechaCrea) ?></td>
                    <td><?= $activofijo->idUsuarioModifica === null ? '' : $this->Number->format($activofijo->idUsuarioModifica) ?></td>
                    <td><?= h($activofijo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activofijo->idActivoFijo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activofijo->idActivoFijo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $activofijo->idActivoFijo], ['confirm' => __('Are you sure you want to delete # {0}?', $activofijo->idActivoFijo)]) ?>
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
