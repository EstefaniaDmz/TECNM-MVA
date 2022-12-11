<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Prestamoprefectura> $prestamoprefectura
 */
?>
<div class="prestamoprefectura index content">
    <?= $this->Html->link(__('New Prestamoprefectura'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prestamoprefectura') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPrestamoPrefectura') ?></th>
                    <th><?= $this->Paginator->sort('idActivoFijo') ?></th>
                    <th><?= $this->Paginator->sort('fechaSalida') ?></th>
                    <th><?= $this->Paginator->sort('fechaRegreso') ?></th>
                    <th><?= $this->Paginator->sort('idDocente') ?></th>
                    <th><?= $this->Paginator->sort('idPrefecto') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prestamoprefectura as $prestamoprefectura): ?>
                <tr>
                    <td><?= $this->Number->format($prestamoprefectura->idPrestamoPrefectura) ?></td>
                    <td><?= $this->Number->format($prestamoprefectura->idActivoFijo) ?></td>
                    <td><?= h($prestamoprefectura->fechaSalida) ?></td>
                    <td><?= h($prestamoprefectura->fechaRegreso) ?></td>
                    <td><?= $this->Number->format($prestamoprefectura->idDocente) ?></td>
                    <td><?= $this->Number->format($prestamoprefectura->idPrefecto) ?></td>
                    <td><?= h($prestamoprefectura->estatus) ?></td>
                    <td><?= $this->Number->format($prestamoprefectura->idUsuarioCrea) ?></td>
                    <td><?= h($prestamoprefectura->fechaCrea) ?></td>
                    <td><?= $prestamoprefectura->idUsuarioModifica === null ? '' : $this->Number->format($prestamoprefectura->idUsuarioModifica) ?></td>
                    <td><?= h($prestamoprefectura->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prestamoprefectura->idPrestamoPrefectura]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prestamoprefectura->idPrestamoPrefectura]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prestamoprefectura->idPrestamoPrefectura], ['confirm' => __('Are you sure you want to delete # {0}?', $prestamoprefectura->idPrestamoPrefectura)]) ?>
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
