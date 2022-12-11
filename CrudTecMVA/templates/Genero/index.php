<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Genero> $genero
 */
?>
<div class="genero index content">
    <?= $this->Html->link(__('New Genero'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Genero') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idGenero') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($genero as $genero): ?>
                <tr>
                    <td><?= $this->Number->format($genero->idGenero) ?></td>
                    <td><?= h($genero->estatus) ?></td>
                    <td><?= $this->Number->format($genero->idUsuarioCrea) ?></td>
                    <td><?= h($genero->fechaCrea) ?></td>
                    <td><?= $genero->idUsuarioModifica === null ? '' : $this->Number->format($genero->idUsuarioModifica) ?></td>
                    <td><?= h($genero->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $genero->idGenero]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $genero->idGenero]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $genero->idGenero], ['confirm' => __('Are you sure you want to delete # {0}?', $genero->idGenero)]) ?>
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
