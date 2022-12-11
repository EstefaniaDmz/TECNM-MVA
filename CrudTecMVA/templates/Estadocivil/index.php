<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estadocivil> $estadocivil
 */
?>
<div class="estadocivil index content">
    <?= $this->Html->link(__('New Estadocivil'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estadocivil') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEstadoCivil') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estadocivil as $estadocivil): ?>
                <tr>
                    <td><?= $this->Number->format($estadocivil->idEstadoCivil) ?></td>
                    <td><?= h($estadocivil->estatus) ?></td>
                    <td><?= $this->Number->format($estadocivil->idUsuarioCrea) ?></td>
                    <td><?= h($estadocivil->fechaCrea) ?></td>
                    <td><?= $estadocivil->idUsuarioModifica === null ? '' : $this->Number->format($estadocivil->idUsuarioModifica) ?></td>
                    <td><?= h($estadocivil->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estadocivil->idEstadoCivil]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estadocivil->idEstadoCivil]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadocivil->idEstadoCivil], ['confirm' => __('Are you sure you want to delete # {0}?', $estadocivil->idEstadoCivil)]) ?>
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
