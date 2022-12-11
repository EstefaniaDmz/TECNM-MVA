<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bibliotecaservicio $bibliotecaservicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bibliotecaservicio'), ['action' => 'edit', $bibliotecaservicio->idBibliotecaServicio], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bibliotecaservicio'), ['action' => 'delete', $bibliotecaservicio->idBibliotecaServicio], ['confirm' => __('Are you sure you want to delete # {0}?', $bibliotecaservicio->idBibliotecaServicio), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bibliotecaservicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bibliotecaservicio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bibliotecaservicio view content">
            <h3><?= h($bibliotecaservicio->idBibliotecaServicio) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdBibliotecaServicio') ?></th>
                    <td><?= $this->Number->format($bibliotecaservicio->idBibliotecaServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdServicio') ?></th>
                    <td><?= $this->Number->format($bibliotecaservicio->idServicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPuesto') ?></th>
                    <td><?= $bibliotecaservicio->idPuesto === null ? '' : $this->Number->format($bibliotecaservicio->idPuesto) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCarrera') ?></th>
                    <td><?= $bibliotecaservicio->idCarrera === null ? '' : $this->Number->format($bibliotecaservicio->idCarrera) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTurno') ?></th>
                    <td><?= $this->Number->format($bibliotecaservicio->idTurno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($bibliotecaservicio->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $bibliotecaservicio->idUsuarioModifica === null ? '' : $this->Number->format($bibliotecaservicio->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($bibliotecaservicio->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($bibliotecaservicio->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($bibliotecaservicio->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $bibliotecaservicio->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
