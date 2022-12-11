<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Softwareequipo> $softwareequipo
 */
?>
<div class="softwareequipo index content">
    <?= $this->Html->link(__('New Softwareequipo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Softwareequipo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSoftwareEquipo') ?></th>
                    <th><?= $this->Paginator->sort('idSoftware') ?></th>
                    <th><?= $this->Paginator->sort('idActivoFijo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($softwareequipo as $softwareequipo): ?>
                <tr>
                    <td><?= $this->Number->format($softwareequipo->idSoftwareEquipo) ?></td>
                    <td><?= $this->Number->format($softwareequipo->idSoftware) ?></td>
                    <td><?= $this->Number->format($softwareequipo->idActivoFijo) ?></td>
                    <td><?= h($softwareequipo->estatus) ?></td>
                    <td><?= $softwareequipo->idUsuarioCrea === null ? '' : $this->Number->format($softwareequipo->idUsuarioCrea) ?></td>
                    <td><?= h($softwareequipo->fechaCrea) ?></td>
                    <td><?= $softwareequipo->idUsuarioModifica === null ? '' : $this->Number->format($softwareequipo->idUsuarioModifica) ?></td>
                    <td><?= h($softwareequipo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $softwareequipo->idSoftwareEquipo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $softwareequipo->idSoftwareEquipo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $softwareequipo->idSoftwareEquipo], ['confirm' => __('Are you sure you want to delete # {0}?', $softwareequipo->idSoftwareEquipo)]) ?>
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
