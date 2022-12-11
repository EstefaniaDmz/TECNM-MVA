<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Departamento> $departamento
 */
?>
<div class="departamento index content">
    <?= $this->Html->link(__('New Departamento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Departamento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idDepartamento') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('idEdificio') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departamento as $departamento): ?>
                <tr>
                    <td><?= $this->Number->format($departamento->idDepartamento) ?></td>
                    <td><?= h($departamento->nombre) ?></td>
                    <td><?= $this->Number->format($departamento->idEdificio) ?></td>
                    <td><?= $departamento->estatus === null ? '' : $this->Number->format($departamento->estatus) ?></td>
                    <td><?= $departamento->idUsuarioCrea === null ? '' : $this->Number->format($departamento->idUsuarioCrea) ?></td>
                    <td><?= h($departamento->fechaCrea) ?></td>
                    <td><?= $departamento->idUsuarioModifica === null ? '' : $this->Number->format($departamento->idUsuarioModifica) ?></td>
                    <td><?= h($departamento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $departamento->idDepartamento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departamento->idDepartamento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departamento->idDepartamento], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->idDepartamento)]) ?>
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
