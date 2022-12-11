<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipousuario $tipousuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipousuario'), ['action' => 'edit', $tipousuario->idTipoUsuario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipousuario'), ['action' => 'delete', $tipousuario->idTipoUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $tipousuario->idTipoUsuario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipousuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipousuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipousuario view content">
            <h3><?= h($tipousuario->idTipoUsuario) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoUsuario') ?></th>
                    <td><?= $this->Number->format($tipousuario->idTipoUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipousuario->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipousuario->idUsuarioModifica === null ? '' : $this->Number->format($tipousuario->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipousuario->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipousuario->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipousuario->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
