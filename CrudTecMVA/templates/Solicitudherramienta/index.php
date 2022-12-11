<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Solicitudherramientum> $solicitudherramienta
 */
?>
<div class="solicitudherramienta index content">
    <?= $this->Html->link(__('New Solicitudherramientum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solicitudherramienta') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSolicitudHerramienta') ?></th>
                    <th><?= $this->Paginator->sort('idSolicitudLaboratorio') ?></th>
                    <th><?= $this->Paginator->sort('idActivoFijo') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitudherramienta as $solicitudherramientum): ?>
                <tr>
                    <td><?= $this->Number->format($solicitudherramientum->idSolicitudHerramienta) ?></td>
                    <td><?= $this->Number->format($solicitudherramientum->idSolicitudLaboratorio) ?></td>
                    <td><?= $solicitudherramientum->idActivoFijo === null ? '' : $this->Number->format($solicitudherramientum->idActivoFijo) ?></td>
                    <td><?= h($solicitudherramientum->fecha) ?></td>
                    <td><?= $solicitudherramientum->estatus === null ? '' : $this->Number->format($solicitudherramientum->estatus) ?></td>
                    <td><?= $solicitudherramientum->idUsuarioCrea === null ? '' : $this->Number->format($solicitudherramientum->idUsuarioCrea) ?></td>
                    <td><?= h($solicitudherramientum->fechaCrea) ?></td>
                    <td><?= $solicitudherramientum->idUsuarioModifica === null ? '' : $this->Number->format($solicitudherramientum->idUsuarioModifica) ?></td>
                    <td><?= h($solicitudherramientum->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solicitudherramientum->idSolicitudHerramienta]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitudherramientum->idSolicitudHerramienta]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitudherramientum->idSolicitudHerramienta], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudherramientum->idSolicitudHerramienta)]) ?>
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
