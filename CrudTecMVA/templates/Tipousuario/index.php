<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipousuario> $tipousuario
 */
?>
<div class="tipousuario index content">
    <?= $this->Html->link(__('New Tipousuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipousuario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoUsuario') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipousuario as $tipousuario): ?>
                <tr>
                    <td><?= $this->Number->format($tipousuario->idTipoUsuario) ?></td>
                    <td><?= h($tipousuario->estatus) ?></td>
                    <td><?= $this->Number->format($tipousuario->idUsuarioCrea) ?></td>
                    <td><?= h($tipousuario->fechaCrea) ?></td>
                    <td><?= $tipousuario->idUsuarioModifica === null ? '' : $this->Number->format($tipousuario->idUsuarioModifica) ?></td>
                    <td><?= h($tipousuario->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipousuario->idTipoUsuario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipousuario->idTipoUsuario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipousuario->idTipoUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $tipousuario->idTipoUsuario)]) ?>
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
