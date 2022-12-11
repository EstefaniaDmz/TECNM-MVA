<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Asignatura> $asignatura
 */
?>
<div class="asignatura index content">
    <?= $this->Html->link(__('New Asignatura'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Asignatura') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAsignatura') ?></th>
                    <th><?= $this->Paginator->sort('clave') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('horasPractica') ?></th>
                    <th><?= $this->Paginator->sort('horasTeoricas') ?></th>
                    <th><?= $this->Paginator->sort('creditos') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asignatura as $asignatura): ?>
                <tr>
                    <td><?= $this->Number->format($asignatura->idAsignatura) ?></td>
                    <td><?= h($asignatura->clave) ?></td>
                    <td><?= h($asignatura->nombre) ?></td>
                    <td><?= $this->Number->format($asignatura->horasPractica) ?></td>
                    <td><?= $this->Number->format($asignatura->horasTeoricas) ?></td>
                    <td><?= $this->Number->format($asignatura->creditos) ?></td>
                    <td><?= h($asignatura->estatus) ?></td>
                    <td><?= $this->Number->format($asignatura->idUsuarioCrea) ?></td>
                    <td><?= h($asignatura->fechaCrea) ?></td>
                    <td><?= $asignatura->idUsuarioModifica === null ? '' : $this->Number->format($asignatura->idUsuarioModifica) ?></td>
                    <td><?= h($asignatura->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $asignatura->idAsignatura]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asignatura->idAsignatura]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asignatura->idAsignatura], ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->idAsignatura)]) ?>
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
