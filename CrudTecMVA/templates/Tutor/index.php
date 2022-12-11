<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tutor> $tutor
 */
?>
<div class="tutor index content">
    <?= $this->Html->link(__('New Tutor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tutor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTutor') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                    <th><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('curp') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('numeroInterior') ?></th>
                    <th><?= $this->Paginator->sort('numeroExterior') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('idAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tutor as $tutor): ?>
                <tr>
                    <td><?= $this->Number->format($tutor->idTutor) ?></td>
                    <td><?= h($tutor->nombre) ?></td>
                    <td><?= h($tutor->apellidoPaterno) ?></td>
                    <td><?= h($tutor->apellidoMaterno) ?></td>
                    <td><?= h($tutor->fechaNacimiento) ?></td>
                    <td><?= h($tutor->curp) ?></td>
                    <td><?= h($tutor->telefono) ?></td>
                    <td><?= $tutor->numeroInterior === null ? '' : $this->Number->format($tutor->numeroInterior) ?></td>
                    <td><?= $tutor->numeroExterior === null ? '' : $this->Number->format($tutor->numeroExterior) ?></td>
                    <td><?= h($tutor->calle) ?></td>
                    <td><?= $this->Number->format($tutor->idAsentamiento) ?></td>
                    <td><?= h($tutor->estatus) ?></td>
                    <td><?= $this->Number->format($tutor->idUsuarioCrea) ?></td>
                    <td><?= h($tutor->fechaCrea) ?></td>
                    <td><?= $this->Number->format($tutor->idUsuarioModifica) ?></td>
                    <td><?= h($tutor->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tutor->idTutor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tutor->idTutor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tutor->idTutor], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->idTutor)]) ?>
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
