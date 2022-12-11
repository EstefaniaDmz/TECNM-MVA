<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preparatorium $preparatorium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Preparatorium'), ['action' => 'edit', $preparatorium->idPreparatoria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Preparatorium'), ['action' => 'delete', $preparatorium->idPreparatoria], ['confirm' => __('Are you sure you want to delete # {0}?', $preparatorium->idPreparatoria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Preparatoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Preparatorium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preparatoria view content">
            <h3><?= h($preparatorium->idPreparatoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($preparatorium->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($preparatorium->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($preparatorium->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPreparatoria') ?></th>
                    <td><?= $this->Number->format($preparatorium->idPreparatoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsentamiento') ?></th>
                    <td><?= $this->Number->format($preparatorium->idAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoPreparatoria') ?></th>
                    <td><?= $this->Number->format($preparatorium->idTipoPreparatoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($preparatorium->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($preparatorium->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($preparatorium->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($preparatorium->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $preparatorium->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
