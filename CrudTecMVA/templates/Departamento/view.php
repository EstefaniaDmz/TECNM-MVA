<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->idDepartamento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->idDepartamento], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->idDepartamento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departamento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Departamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamento view content">
            <h3><?= h($departamento->idDepartamento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($departamento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDepartamento') ?></th>
                    <td><?= $this->Number->format($departamento->idDepartamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEdificio') ?></th>
                    <td><?= $this->Number->format($departamento->idEdificio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $departamento->estatus === null ? '' : $this->Number->format($departamento->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $departamento->idUsuarioCrea === null ? '' : $this->Number->format($departamento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $departamento->idUsuarioModifica === null ? '' : $this->Number->format($departamento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($departamento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($departamento->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
