<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carrera> $carrera
 */
?>
<div class="carrera index content">
    <?= $this->Html->link(__('New Carrera'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carrera') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCarrera') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('clave') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carrera as $carrera): ?>
                <tr>
                    <td><?= $this->Number->format($carrera->idCarrera) ?></td>
                    <td><?= h($carrera->nombre) ?></td>
                    <td><?= h($carrera->clave) ?></td>
                    <td><?= h($carrera->estatus) ?></td>
                    <td><?= $this->Number->format($carrera->idUsuarioCrea) ?></td>
                    <td><?= h($carrera->fechaCrea) ?></td>
                    <td><?= $this->Number->format($carrera->idUsuarioModifica) ?></td>
                    <td><?= h($carrera->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carrera->idCarrera]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrera->idCarrera]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrera->idCarrera], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->idCarrera)]) ?>
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
