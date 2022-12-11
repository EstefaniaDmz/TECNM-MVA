<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Genero'), ['action' => 'edit', $genero->idGenero], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Genero'), ['action' => 'delete', $genero->idGenero], ['confirm' => __('Are you sure you want to delete # {0}?', $genero->idGenero), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Genero'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Genero'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="genero view content">
            <h3><?= h($genero->idGenero) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdGenero') ?></th>
                    <td><?= $this->Number->format($genero->idGenero) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($genero->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $genero->idUsuarioModifica === null ? '' : $this->Number->format($genero->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($genero->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($genero->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $genero->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
