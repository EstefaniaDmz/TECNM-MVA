<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopago $tipopago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipopago'), ['action' => 'edit', $tipopago->idTipoPago], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipopago'), ['action' => 'delete', $tipopago->idTipoPago], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopago->idTipoPago), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipopago'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipopago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipopago view content">
            <h3><?= h($tipopago->idTipoPago) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdTipoPago') ?></th>
                    <td><?= $this->Number->format($tipopago->idTipoPago) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($tipopago->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipopago->idUsuarioModifica === null ? '' : $this->Number->format($tipopago->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipopago->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipopago->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $tipopago->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
