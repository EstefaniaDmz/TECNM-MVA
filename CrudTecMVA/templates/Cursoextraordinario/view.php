<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cursoextraordinario $cursoextraordinario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cursoextraordinario'), ['action' => 'edit', $cursoextraordinario->idCursoExtraordinario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cursoextraordinario'), ['action' => 'delete', $cursoextraordinario->idCursoExtraordinario], ['confirm' => __('Are you sure you want to delete # {0}?', $cursoextraordinario->idCursoExtraordinario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cursoextraordinario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cursoextraordinario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursoextraordinario view content">
            <h3><?= h($cursoextraordinario->idCursoExtraordinario) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdCursoExtraordinario') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->idCursoExtraordinario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoCursoMateria') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->idTipoCursoMateria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDocente') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->idDocente) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalHoras') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->totalHoras) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalAlumnos') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->totalAlumnos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrecioIndividual') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->precioIndividual) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($cursoextraordinario->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $cursoextraordinario->idUsuarioModifica === null ? '' : $this->Number->format($cursoextraordinario->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($cursoextraordinario->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($cursoextraordinario->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($cursoextraordinario->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($cursoextraordinario->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $cursoextraordinario->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
