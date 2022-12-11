<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tiposervicio> $tiposervicio
 */
?>
<div class="tiposervicio index content">
    <?= $this->Html->link(__('New Tiposervicio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tiposervicio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoServicio') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiposervicio as $tiposervicio): ?>
                <tr>
                    <td><?= $this->Number->format($tiposervicio->idTipoServicio) ?></td>
                    <td><?= h($tiposervicio->estatus) ?></td>
                    <td><?= $this->Number->format($tiposervicio->idUsuarioCrea) ?></td>
                    <td><?= h($tiposervicio->fechaCrea) ?></td>
                    <td><?= $tiposervicio->idUsuarioModifica === null ? '' : $this->Number->format($tiposervicio->idUsuarioModifica) ?></td>
                    <td><?= h($tiposervicio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tiposervicio->idTipoServicio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposervicio->idTipoServicio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposervicio->idTipoServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->idTipoServicio)]) ?>
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
