<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocursomaterium $tipocursomaterium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipocursomaterium'), ['action' => 'edit', $tipocursomaterium->idTipoCursoMateria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipocursomaterium'), ['action' => 'delete', $tipocursomaterium->idTipoCursoMateria], ['confirm' => __('Are you sure you want to delete # {0}?', $tipocursomaterium->idTipoCursoMateria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipocursomateria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipocursomaterium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipocursomateria view content">
            <h3><?= h($tipocursomaterium->idTipoCursoMateria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipocursomaterium->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoCursoMateria') ?></th>
                    <td><?= $this->Number->format($tipocursomaterium->idTipoCursoMateria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipocursomaterium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipocursomaterium->idUsuarioModifica === null ? '' : $this->Number->format($tipocursomaterium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipocursomaterium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipocursomaterium->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipocursomaterium->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
