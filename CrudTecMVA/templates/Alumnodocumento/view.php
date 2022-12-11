<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnodocumento $alumnodocumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnodocumento'), ['action' => 'edit', $alumnodocumento->idAlumnoDocumento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnodocumento'), ['action' => 'delete', $alumnodocumento->idAlumnoDocumento], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnodocumento->idAlumnoDocumento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnodocumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnodocumento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnodocumento view content">
            <h3><?= h($alumnodocumento->idAlumnoDocumento) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdAlumnoDocumento') ?></th>
                    <td><?= $this->Number->format($alumnodocumento->idAlumnoDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($alumnodocumento->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDocumento') ?></th>
                    <td><?= $this->Number->format($alumnodocumento->idDocumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($alumnodocumento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $alumnodocumento->idUsuarioModifica === null ? '' : $this->Number->format($alumnodocumento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaEntrega') ?></th>
                    <td><?= h($alumnodocumento->fechaEntrega) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($alumnodocumento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($alumnodocumento->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $alumnodocumento->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
