<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Softwareequipo $softwareequipo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Softwareequipo'), ['action' => 'edit', $softwareequipo->idSoftwareEquipo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Softwareequipo'), ['action' => 'delete', $softwareequipo->idSoftwareEquipo], ['confirm' => __('Are you sure you want to delete # {0}?', $softwareequipo->idSoftwareEquipo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Softwareequipo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Softwareequipo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="softwareequipo view content">
            <h3><?= h($softwareequipo->idSoftwareEquipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdSoftwareEquipo') ?></th>
                    <td><?= $this->Number->format($softwareequipo->idSoftwareEquipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSoftware') ?></th>
                    <td><?= $this->Number->format($softwareequipo->idSoftware) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActivoFijo') ?></th>
                    <td><?= $this->Number->format($softwareequipo->idActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $softwareequipo->idUsuarioCrea === null ? '' : $this->Number->format($softwareequipo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $softwareequipo->idUsuarioModifica === null ? '' : $this->Number->format($softwareequipo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($softwareequipo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($softwareequipo->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $softwareequipo->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
