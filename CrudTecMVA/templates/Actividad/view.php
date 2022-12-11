<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actividad $actividad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Actividad'), ['action' => 'edit', $actividad->idActividad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Actividad'), ['action' => 'delete', $actividad->idActividad], ['confirm' => __('Are you sure you want to delete # {0}?', $actividad->idActividad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Actividad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Actividad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="actividad view content">
            <h3><?= h($actividad->idActividad) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($actividad->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActividad') ?></th>
                    <td><?= $this->Number->format($actividad->idActividad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoActividad') ?></th>
                    <td><?= $actividad->idTipoActividad === null ? '' : $this->Number->format($actividad->idTipoActividad) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreditoValor') ?></th>
                    <td><?= $this->Number->format($actividad->creditoValor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $actividad->estatus === null ? '' : $this->Number->format($actividad->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $actividad->idUsuarioCrea === null ? '' : $this->Number->format($actividad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $actividad->idUsuarioModifica === null ? '' : $this->Number->format($actividad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($actividad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($actividad->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
