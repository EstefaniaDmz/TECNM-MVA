<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Residencium $residencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Residencium'), ['action' => 'edit', $residencium->idResidencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Residencium'), ['action' => 'delete', $residencium->idResidencia], ['confirm' => __('Are you sure you want to delete # {0}?', $residencium->idResidencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Residencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Residencium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="residencia view content">
            <h3><?= h($residencium->idResidencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdResidencia') ?></th>
                    <td><?= $this->Number->format($residencium->idResidencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($residencium->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($residencium->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdOrganizacion') ?></th>
                    <td><?= $this->Number->format($residencium->idOrganizacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $residencium->estatus === null ? '' : $this->Number->format($residencium->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($residencium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($residencium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($residencium->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($residencium->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($residencium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($residencium->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
