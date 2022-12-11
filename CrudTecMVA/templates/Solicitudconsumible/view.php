<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudconsumible $solicitudconsumible
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solicitudconsumible'), ['action' => 'edit', $solicitudconsumible->idSolicitudConsumible], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solicitudconsumible'), ['action' => 'delete', $solicitudconsumible->idSolicitudConsumible], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudconsumible->idSolicitudConsumible), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solicitudconsumible'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solicitudconsumible'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudconsumible view content">
            <h3><?= h($solicitudconsumible->idSolicitudConsumible) ?></h3>
            <table>
                <tr>
                    <th><?= __('Notas') ?></th>
                    <td><?= h($solicitudconsumible->notas) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSolicitudConsumible') ?></th>
                    <td><?= $this->Number->format($solicitudconsumible->idSolicitudConsumible) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSolicitudLaboratorio') ?></th>
                    <td><?= $this->Number->format($solicitudconsumible->idSolicitudLaboratorio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdConsumible') ?></th>
                    <td><?= $solicitudconsumible->idConsumible === null ? '' : $this->Number->format($solicitudconsumible->idConsumible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $solicitudconsumible->estatus === null ? '' : $this->Number->format($solicitudconsumible->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $solicitudconsumible->idUsuarioCrea === null ? '' : $this->Number->format($solicitudconsumible->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $solicitudconsumible->idUsuarioModifica === null ? '' : $this->Number->format($solicitudconsumible->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($solicitudconsumible->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($solicitudconsumible->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
