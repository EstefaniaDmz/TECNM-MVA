<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucionsalud $institucionsalud
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Institucionsalud'), ['action' => 'edit', $institucionsalud->idInstitucionSalud], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Institucionsalud'), ['action' => 'delete', $institucionsalud->idInstitucionSalud], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionsalud->idInstitucionSalud), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Institucionsalud'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Institucionsalud'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="institucionsalud view content">
            <h3><?= h($institucionsalud->idInstitucionSalud) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdInstitucionSalud') ?></th>
                    <td><?= $this->Number->format($institucionsalud->idInstitucionSalud) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($institucionsalud->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $institucionsalud->idUsuarioModifica === null ? '' : $this->Number->format($institucionsalud->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($institucionsalud->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($institucionsalud->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $institucionsalud->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
