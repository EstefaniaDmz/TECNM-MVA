<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipodocumento $tipodocumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipodocumento'), ['action' => 'edit', $tipodocumento->idTipoDocumento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipodocumento'), ['action' => 'delete', $tipodocumento->idTipoDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipodocumento->idTipoDocumento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipodocumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipodocumento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipodocumento view content">
            <h3><?= h($tipodocumento->idTipoDocumento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipodocumento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoDocumento') ?></th>
                    <td><?= $this->Number->format($tipodocumento->idTipoDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipodocumento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipodocumento->idUsuarioModifica === null ? '' : $this->Number->format($tipodocumento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipodocumento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipodocumento->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipodocumento->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
