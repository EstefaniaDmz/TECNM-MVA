<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Preparatorium> $preparatoria
 */
?>
<div class="preparatoria index content">
    <?= $this->Html->link(__('New Preparatorium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Preparatoria') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPreparatoria') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('idAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('idTipoPreparatoria') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($preparatoria as $preparatorium): ?>
                <tr>
                    <td><?= $this->Number->format($preparatorium->idPreparatoria) ?></td>
                    <td><?= h($preparatorium->nombre) ?></td>
                    <td><?= h($preparatorium->calle) ?></td>
                    <td><?= h($preparatorium->numero) ?></td>
                    <td><?= $this->Number->format($preparatorium->idAsentamiento) ?></td>
                    <td><?= $this->Number->format($preparatorium->idTipoPreparatoria) ?></td>
                    <td><?= h($preparatorium->estatus) ?></td>
                    <td><?= $this->Number->format($preparatorium->idUsuarioCrea) ?></td>
                    <td><?= h($preparatorium->fechaCrea) ?></td>
                    <td><?= $this->Number->format($preparatorium->idUsuarioModifica) ?></td>
                    <td><?= h($preparatorium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $preparatorium->idPreparatoria]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $preparatorium->idPreparatoria]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $preparatorium->idPreparatoria], ['confirm' => __('Are you sure you want to delete # {0}?', $preparatorium->idPreparatoria)]) ?>
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
