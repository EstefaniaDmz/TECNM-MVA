<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->idContrato], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->idContrato], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idContrato), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contrato'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contrato view content">
            <h3><?= h($contrato->idContrato) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdContrato') ?></th>
                    <td><?= $this->Number->format($contrato->idContrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('CantidadHoras') ?></th>
                    <td><?= $this->Number->format($contrato->cantidadHoras) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duracion') ?></th>
                    <td><?= $this->Number->format($contrato->duracion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($contrato->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($contrato->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $contrato->estatus === null ? '' : $this->Number->format($contrato->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $contrato->idUsuarioCrea === null ? '' : $this->Number->format($contrato->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $contrato->idUsuarioModifica === null ? '' : $this->Number->format($contrato->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($contrato->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($contrato->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($contrato->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($contrato->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
