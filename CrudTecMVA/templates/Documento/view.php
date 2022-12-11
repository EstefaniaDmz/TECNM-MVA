<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documento $documento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Documento'), ['action' => 'edit', $documento->idDocumento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Documento'), ['action' => 'delete', $documento->idDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $documento->idDocumento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Documento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documento view content">
            <h3><?= h($documento->idDocumento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($documento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($documento->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDocumento') ?></th>
                    <td><?= $this->Number->format($documento->idDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDocumento') ?></th>
                    <td><?= $this->Number->format($documento->idTipoDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($documento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $documento->idUsuarioModifica === null ? '' : $this->Number->format($documento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($documento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($documento->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $documento->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
