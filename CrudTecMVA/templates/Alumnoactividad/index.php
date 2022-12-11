<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumnoactividad> $alumnoactividad
 */
?>
<div class="alumnoactividad index content">
    <?= $this->Html->link(__('New Alumnoactividad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnoactividad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumnoActividad') ?></th>
                    <th><?= $this->Paginator->sort('nivel') ?></th>
                    <th><?= $this->Paginator->sort('observacion') ?></th>
                    <th><?= $this->Paginator->sort('valorCredito') ?></th>
                    <th><?= $this->Paginator->sort('idPeriodo') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idActividad') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnoactividad as $alumnoactividad): ?>
                <tr>
                    <td><?= $this->Number->format($alumnoactividad->idAlumnoActividad) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->nivel) ?></td>
                    <td><?= h($alumnoactividad->observacion) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->valorCredito) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->idPeriodo) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->idAlumno) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->idEmpleado) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->idActividad) ?></td>
                    <td><?= h($alumnoactividad->estatus) ?></td>
                    <td><?= $this->Number->format($alumnoactividad->idUsuarioCrea) ?></td>
                    <td><?= h($alumnoactividad->fechaCrea) ?></td>
                    <td><?= $alumnoactividad->idUsuarioModifica === null ? '' : $this->Number->format($alumnoactividad->idUsuarioModifica) ?></td>
                    <td><?= h($alumnoactividad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnoactividad->idAlumnoActividad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnoactividad->idAlumnoActividad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnoactividad->idAlumnoActividad], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoactividad->idAlumnoActividad)]) ?>
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
