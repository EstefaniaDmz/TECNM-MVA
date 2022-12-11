<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Organizacion> $organizacion
 */
?>
<div class="organizacion index content">
    <?= $this->Html->link(__('New Organizacion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Organizacion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idOrganizacion') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('numeroInterior') ?></th>
                    <th><?= $this->Paginator->sort('numeroExterior') ?></th>
                    <th><?= $this->Paginator->sort('idAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('idTipoOrganizacion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizacion as $organizacion): ?>
                <tr>
                    <td><?= $this->Number->format($organizacion->idOrganizacion) ?></td>
                    <td><?= h($organizacion->nombre) ?></td>
                    <td><?= h($organizacion->rfc) ?></td>
                    <td><?= h($organizacion->calle) ?></td>
                    <td><?= h($organizacion->numeroInterior) ?></td>
                    <td><?= h($organizacion->numeroExterior) ?></td>
                    <td><?= $this->Number->format($organizacion->idAsentamiento) ?></td>
                    <td><?= $this->Number->format($organizacion->idTipoOrganizacion) ?></td>
                    <td><?= h($organizacion->estatus) ?></td>
                    <td><?= $this->Number->format($organizacion->idUsuarioCrea) ?></td>
                    <td><?= h($organizacion->fechaCrea) ?></td>
                    <td><?= $organizacion->idUsuarioModifica === null ? '' : $this->Number->format($organizacion->idUsuarioModifica) ?></td>
                    <td><?= h($organizacion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organizacion->idOrganizacion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organizacion->idOrganizacion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organizacion->idOrganizacion], ['confirm' => __('Are you sure you want to delete # {0}?', $organizacion->idOrganizacion)]) ?>
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
