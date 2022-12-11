<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Solicitudlaboratorio> $solicitudlaboratorio
 */
?>
<div class="solicitudlaboratorio index content">
    <?= $this->Html->link(__('New Solicitudlaboratorio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solicitudlaboratorio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSolicitudLaboratorio') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('numeroAlumnos') ?></th>
                    <th><?= $this->Paginator->sort('notas') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitudlaboratorio as $solicitudlaboratorio): ?>
                <tr>
                    <td><?= $this->Number->format($solicitudlaboratorio->idSolicitudLaboratorio) ?></td>
                    <td><?= $solicitudlaboratorio->idEmpleado === null ? '' : $this->Number->format($solicitudlaboratorio->idEmpleado) ?></td>
                    <td><?= h($solicitudlaboratorio->fecha) ?></td>
                    <td><?= $this->Number->format($solicitudlaboratorio->numeroAlumnos) ?></td>
                    <td><?= h($solicitudlaboratorio->notas) ?></td>
                    <td><?= $solicitudlaboratorio->estatus === null ? '' : $this->Number->format($solicitudlaboratorio->estatus) ?></td>
                    <td><?= $solicitudlaboratorio->idUsuarioCrea === null ? '' : $this->Number->format($solicitudlaboratorio->idUsuarioCrea) ?></td>
                    <td><?= h($solicitudlaboratorio->fechaCrea) ?></td>
                    <td><?= $solicitudlaboratorio->idUsuarioModifica === null ? '' : $this->Number->format($solicitudlaboratorio->idUsuarioModifica) ?></td>
                    <td><?= h($solicitudlaboratorio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solicitudlaboratorio->idSolicitudLaboratorio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitudlaboratorio->idSolicitudLaboratorio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitudlaboratorio->idSolicitudLaboratorio], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudlaboratorio->idSolicitudLaboratorio)]) ?>
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
