<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bibliotecaservicio> $bibliotecaservicio
 */
?>
<div class="bibliotecaservicio index content">
    <?= $this->Html->link(__('New Bibliotecaservicio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bibliotecaservicio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idBibliotecaServicio') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('idServicio') ?></th>
                    <th><?= $this->Paginator->sort('idPuesto') ?></th>
                    <th><?= $this->Paginator->sort('idCarrera') ?></th>
                    <th><?= $this->Paginator->sort('idTurno') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bibliotecaservicio as $bibliotecaservicio): ?>
                <tr>
                    <td><?= $this->Number->format($bibliotecaservicio->idBibliotecaServicio) ?></td>
                    <td><?= h($bibliotecaservicio->fecha) ?></td>
                    <td><?= $this->Number->format($bibliotecaservicio->idServicio) ?></td>
                    <td><?= $bibliotecaservicio->idPuesto === null ? '' : $this->Number->format($bibliotecaservicio->idPuesto) ?></td>
                    <td><?= $bibliotecaservicio->idCarrera === null ? '' : $this->Number->format($bibliotecaservicio->idCarrera) ?></td>
                    <td><?= $this->Number->format($bibliotecaservicio->idTurno) ?></td>
                    <td><?= h($bibliotecaservicio->estatus) ?></td>
                    <td><?= $this->Number->format($bibliotecaservicio->idUsuarioCrea) ?></td>
                    <td><?= h($bibliotecaservicio->fechaCrea) ?></td>
                    <td><?= $bibliotecaservicio->idUsuarioModifica === null ? '' : $this->Number->format($bibliotecaservicio->idUsuarioModifica) ?></td>
                    <td><?= h($bibliotecaservicio->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bibliotecaservicio->idBibliotecaServicio]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bibliotecaservicio->idBibliotecaServicio]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bibliotecaservicio->idBibliotecaServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $bibliotecaservicio->idBibliotecaServicio)]) ?>
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
