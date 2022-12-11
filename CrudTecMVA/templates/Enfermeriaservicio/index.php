<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Enfermeriaservicio> $enfermeriaservicio
 */
?>
<div class="enfermeriaservicio index content">
    <?= $this->Html->link(__('New Enfermeriaservicio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Enfermeriaservicio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEnfermeriaServicio') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idServicio') ?></th>
                    <th><?= $this->Paginator->sort('idTipoUrgencia') ?></th>
                    <th><?= $this->Paginator->sort('observacion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enfermeriaservicio as $enfermeriaservicio): ?>
                <tr>
                    <td><?= $this->Number->format($enfermeriaservicio->idEnfermeriaServicio) ?></td>
                    <td><?= h($enfermeriaservicio->fecha) ?></td>
                    <td><?= $enfermeriaservicio->idEmpleado === null ? '' : $this->Number->format($enfermeriaservicio->idEmpleado) ?></td>
                    <td><?= $enfermeriaservicio->idAlumno === null ? '' : $this->Number->format($enfermeriaservicio->idAlumno) ?></td>
                    <td><?= $this->Number->format($enfermeriaservicio->idServicio) ?></td>
                    <td><?= $this->Number->format($enfermeriaservicio->idTipoUrgencia) ?></td>
                    <td><?= h($enfermeriaservicio->observacion) ?></td>
                    <td><?= h($enfermeriaservicio->estatus) ?></td>
                    <td><?= $this->Number->format($enfermeriaservicio->idUsuarioCrea) ?></td>
                    <td><?= h($enfermeriaservicio->fechaCrea) ?></td>
                    <td><?= $enfermeriaservicio->idUsuarioModifica === null ? '' : $this->Number->format($enfermeriaservicio->idUsuarioModifica) ?></td>
                    <td><?= h($enfermeriaservicio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enfermeriaservicio->idEnfermeriaServicio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enfermeriaservicio->idEnfermeriaServicio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enfermeriaservicio->idEnfermeriaServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $enfermeriaservicio->idEnfermeriaServicio)]) ?>
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
