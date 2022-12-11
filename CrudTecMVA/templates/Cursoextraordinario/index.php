<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cursoextraordinario> $cursoextraordinario
 */
?>
<div class="cursoextraordinario index content">
    <?= $this->Html->link(__('New Cursoextraordinario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cursoextraordinario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCursoExtraordinario') ?></th>
                    <th><?= $this->Paginator->sort('idTipoCursoMateria') ?></th>
                    <th><?= $this->Paginator->sort('idDocente') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('totalHoras') ?></th>
                    <th><?= $this->Paginator->sort('totalAlumnos') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('precioIndividual') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursoextraordinario as $cursoextraordinario): ?>
                <tr>
                    <td><?= $this->Number->format($cursoextraordinario->idCursoExtraordinario) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->idTipoCursoMateria) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->idDocente) ?></td>
                    <td><?= h($cursoextraordinario->fechaInicio) ?></td>
                    <td><?= h($cursoextraordinario->fechaFinal) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->totalHoras) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->totalAlumnos) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->precio) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->precioIndividual) ?></td>
                    <td><?= h($cursoextraordinario->estatus) ?></td>
                    <td><?= $this->Number->format($cursoextraordinario->idUsuarioCrea) ?></td>
                    <td><?= h($cursoextraordinario->fechaCrea) ?></td>
                    <td><?= $cursoextraordinario->idUsuarioModifica === null ? '' : $this->Number->format($cursoextraordinario->idUsuarioModifica) ?></td>
                    <td><?= h($cursoextraordinario->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cursoextraordinario->idCursoExtraordinario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cursoextraordinario->idCursoExtraordinario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cursoextraordinario->idCursoExtraordinario], ['confirm' => __('Are you sure you want to delete # {0}?', $cursoextraordinario->idCursoExtraordinario)]) ?>
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
