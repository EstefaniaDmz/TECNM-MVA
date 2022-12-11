<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pago $pago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pago'), ['action' => 'edit', $pago->idPago], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pago'), ['action' => 'delete', $pago->idPago], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pago'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pago view content">
            <h3><?= h($pago->idPago) ?></h3>
            <table>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= h($pago->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPago') ?></th>
                    <td><?= $this->Number->format($pago->idPago) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($pago->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoPago') ?></th>
                    <td><?= $this->Number->format($pago->idTipoPago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $this->Number->format($pago->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($pago->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $pago->idUsuarioModifica === null ? '' : $this->Number->format($pago->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($pago->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($pago->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $pago->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
