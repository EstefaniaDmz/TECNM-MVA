<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudherramientum $solicitudherramientum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solicitudherramientum'), ['action' => 'edit', $solicitudherramientum->idSolicitudHerramienta], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solicitudherramientum'), ['action' => 'delete', $solicitudherramientum->idSolicitudHerramienta], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudherramientum->idSolicitudHerramienta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solicitudherramienta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solicitudherramientum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudherramienta view content">
            <h3><?= h($solicitudherramientum->idSolicitudHerramienta) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdSolicitudHerramienta') ?></th>
                    <td><?= $this->Number->format($solicitudherramientum->idSolicitudHerramienta) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSolicitudLaboratorio') ?></th>
                    <td><?= $this->Number->format($solicitudherramientum->idSolicitudLaboratorio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActivoFijo') ?></th>
                    <td><?= $solicitudherramientum->idActivoFijo === null ? '' : $this->Number->format($solicitudherramientum->idActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $solicitudherramientum->estatus === null ? '' : $this->Number->format($solicitudherramientum->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $solicitudherramientum->idUsuarioCrea === null ? '' : $this->Number->format($solicitudherramientum->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $solicitudherramientum->idUsuarioModifica === null ? '' : $this->Number->format($solicitudherramientum->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($solicitudherramientum->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($solicitudherramientum->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($solicitudherramientum->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
