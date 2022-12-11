<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Residencium> $residencia
 */
?>
<div class="residencia index content">
    <?= $this->Html->link(__('New Residencium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Residencia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idResidencia') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idOrganizacion') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($residencia as $residencium): ?>
                <tr>
                    <td><?= $this->Number->format($residencium->idResidencia) ?></td>
                    <td><?= $this->Number->format($residencium->idAlumno) ?></td>
                    <td><?= $this->Number->format($residencium->idEmpleado) ?></td>
                    <td><?= $this->Number->format($residencium->idOrganizacion) ?></td>
                    <td><?= h($residencium->fechaInicio) ?></td>
                    <td><?= h($residencium->fechaFinal) ?></td>
                    <td><?= $residencium->estatus === null ? '' : $this->Number->format($residencium->estatus) ?></td>
                    <td><?= $this->Number->format($residencium->idUsuarioCrea) ?></td>
                    <td><?= h($residencium->fechaCrea) ?></td>
                    <td><?= $this->Number->format($residencium->idUsuarioModifica) ?></td>
                    <td><?= h($residencium->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $residencium->idResidencia]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $residencium->idResidencia]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $residencium->idResidencia], ['confirm' => __('Are you sure you want to delete # {0}?', $residencium->idResidencia)]) ?>
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
