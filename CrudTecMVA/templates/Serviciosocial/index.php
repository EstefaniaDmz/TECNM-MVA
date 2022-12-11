<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Serviciosocial> $serviciosocial
 */
?>
<div class="serviciosocial index content">
    <?= $this->Html->link(__('New Serviciosocial'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Serviciosocial') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idServicioSocial') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('idOrganizacion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($serviciosocial as $serviciosocial): ?>
                <tr>
                    <td><?= $this->Number->format($serviciosocial->idServicioSocial) ?></td>
                    <td><?= $this->Number->format($serviciosocial->idAlumno) ?></td>
                    <td><?= h($serviciosocial->fechaInicio) ?></td>
                    <td><?= h($serviciosocial->fechaFinal) ?></td>
                    <td><?= $this->Number->format($serviciosocial->idOrganizacion) ?></td>
                    <td><?= $serviciosocial->estatus === null ? '' : $this->Number->format($serviciosocial->estatus) ?></td>
                    <td><?= $this->Number->format($serviciosocial->idUsuarioCrea) ?></td>
                    <td><?= h($serviciosocial->fechaCrea) ?></td>
                    <td><?= $this->Number->format($serviciosocial->idUsuarioModifica) ?></td>
                    <td><?= h($serviciosocial->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviciosocial->idServicioSocial]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviciosocial->idServicioSocial]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviciosocial->idServicioSocial], ['confirm' => __('Are you sure you want to delete # {0}?', $serviciosocial->idServicioSocial)]) ?>
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
