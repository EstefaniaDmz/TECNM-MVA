<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Software $software
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Software'), ['action' => 'edit', $software->idSoftware], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Software'), ['action' => 'delete', $software->idSoftware], ['confirm' => __('Are you sure you want to delete # {0}?', $software->idSoftware), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Software'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Software'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="software view content">
            <h3><?= h($software->idSoftware) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($software->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($software->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Version') ?></th>
                    <td><?= h($software->version) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($software->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSoftware') ?></th>
                    <td><?= $this->Number->format($software->idSoftware) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $software->idUsuarioCrea === null ? '' : $this->Number->format($software->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $software->idUsuarioModifica === null ? '' : $this->Number->format($software->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($software->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($software->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $software->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
