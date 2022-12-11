<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asentamiento $asentamiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Asentamiento'), ['action' => 'edit', $asentamiento->idAsentamiento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Asentamiento'), ['action' => 'delete', $asentamiento->idAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $asentamiento->idAsentamiento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Asentamiento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Asentamiento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asentamiento view content">
            <h3><?= h($asentamiento->idAsentamiento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($asentamiento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('CodigoPostal') ?></th>
                    <td><?= h($asentamiento->codigoPostal) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsentamiento') ?></th>
                    <td><?= $this->Number->format($asentamiento->idAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $asentamiento->id === null ? '' : $this->Number->format($asentamiento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoAsentamiento') ?></th>
                    <td><?= $this->Number->format($asentamiento->idTipoAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCiudad') ?></th>
                    <td><?= $this->Number->format($asentamiento->idCiudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdZona') ?></th>
                    <td><?= $this->Number->format($asentamiento->idZona) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($asentamiento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $asentamiento->idUsuarioModifica === null ? '' : $this->Number->format($asentamiento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($asentamiento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($asentamiento->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $asentamiento->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
