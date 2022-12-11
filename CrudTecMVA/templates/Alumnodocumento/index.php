<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumnodocumento> $alumnodocumento
 */
?>
<div class="alumnodocumento index content">
    <?= $this->Html->link(__('New Alumnodocumento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnodocumento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAlumnoDocumento') ?></th>
                    <th><?= $this->Paginator->sort('idAlumno') ?></th>
                    <th><?= $this->Paginator->sort('idDocumento') ?></th>
                    <th><?= $this->Paginator->sort('fechaEntrega') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnodocumento as $alumnodocumento): ?>
                <tr>
                    <td><?= $this->Number->format($alumnodocumento->idAlumnoDocumento) ?></td>
                    <td><?= $this->Number->format($alumnodocumento->idAlumno) ?></td>
                    <td><?= $this->Number->format($alumnodocumento->idDocumento) ?></td>
                    <td><?= h($alumnodocumento->fechaEntrega) ?></td>
                    <td><?= h($alumnodocumento->estatus) ?></td>
                    <td><?= $this->Number->format($alumnodocumento->idUsuarioCrea) ?></td>
                    <td><?= h($alumnodocumento->fechaCrea) ?></td>
                    <td><?= $alumnodocumento->idUsuarioModifica === null ? '' : $this->Number->format($alumnodocumento->idUsuarioModifica) ?></td>
                    <td><?= h($alumnodocumento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnodocumento->idAlumnoDocumento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnodocumento->idAlumnoDocumento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnodocumento->idAlumnoDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnodocumento->idAlumnoDocumento)]) ?>
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
