<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestamoprefectura $prestamoprefectura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prestamoprefectura'), ['action' => 'edit', $prestamoprefectura->idPrestamoPrefectura], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prestamoprefectura'), ['action' => 'delete', $prestamoprefectura->idPrestamoPrefectura], ['confirm' => __('Are you sure you want to delete # {0}?', $prestamoprefectura->idPrestamoPrefectura), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prestamoprefectura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prestamoprefectura'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prestamoprefectura view content">
            <h3><?= h($prestamoprefectura->idPrestamoPrefectura) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdPrestamoPrefectura') ?></th>
                    <td><?= $this->Number->format($prestamoprefectura->idPrestamoPrefectura) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdActivoFijo') ?></th>
                    <td><?= $this->Number->format($prestamoprefectura->idActivoFijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDocente') ?></th>
                    <td><?= $this->Number->format($prestamoprefectura->idDocente) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPrefecto') ?></th>
                    <td><?= $this->Number->format($prestamoprefectura->idPrefecto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($prestamoprefectura->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $prestamoprefectura->idUsuarioModifica === null ? '' : $this->Number->format($prestamoprefectura->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaSalida') ?></th>
                    <td><?= h($prestamoprefectura->fechaSalida) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaRegreso') ?></th>
                    <td><?= h($prestamoprefectura->fechaRegreso) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($prestamoprefectura->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($prestamoprefectura->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $prestamoprefectura->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
