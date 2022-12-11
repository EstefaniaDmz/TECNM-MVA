<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadocivil $estadocivil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estadocivil'), ['action' => 'edit', $estadocivil->idEstadoCivil], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estadocivil'), ['action' => 'delete', $estadocivil->idEstadoCivil], ['confirm' => __('Are you sure you want to delete # {0}?', $estadocivil->idEstadoCivil), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estadocivil'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estadocivil'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estadocivil view content">
            <h3><?= h($estadocivil->idEstadoCivil) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdEstadoCivil') ?></th>
                    <td><?= $this->Number->format($estadocivil->idEstadoCivil) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($estadocivil->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $estadocivil->idUsuarioModifica === null ? '' : $this->Number->format($estadocivil->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($estadocivil->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($estadocivil->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $estadocivil->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
