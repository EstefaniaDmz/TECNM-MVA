<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Asentamiento> $asentamiento
 */
?>
<div class="asentamiento index content">
    <?= $this->Html->link(__('New Asentamiento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Asentamiento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('codigoPostal') ?></th>
                    <th><?= $this->Paginator->sort('idTipoAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('idCiudad') ?></th>
                    <th><?= $this->Paginator->sort('idZona') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asentamiento as $asentamiento): ?>
                <tr>
                    <td><?= $this->Number->format($asentamiento->idAsentamiento) ?></td>
                    <td><?= $asentamiento->id === null ? '' : $this->Number->format($asentamiento->id) ?></td>
                    <td><?= h($asentamiento->nombre) ?></td>
                    <td><?= h($asentamiento->codigoPostal) ?></td>
                    <td><?= $this->Number->format($asentamiento->idTipoAsentamiento) ?></td>
                    <td><?= $this->Number->format($asentamiento->idCiudad) ?></td>
                    <td><?= $this->Number->format($asentamiento->idZona) ?></td>
                    <td><?= h($asentamiento->estatus) ?></td>
                    <td><?= $this->Number->format($asentamiento->idUsuarioCrea) ?></td>
                    <td><?= h($asentamiento->fechaCrea) ?></td>
                    <td><?= $asentamiento->idUsuarioModifica === null ? '' : $this->Number->format($asentamiento->idUsuarioModifica) ?></td>
                    <td><?= h($asentamiento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $asentamiento->idAsentamiento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asentamiento->idAsentamiento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asentamiento->idAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $asentamiento->idAsentamiento)]) ?>
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
