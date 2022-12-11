<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizacion $organizacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Organizacion'), ['action' => 'edit', $organizacion->idOrganizacion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organizacion'), ['action' => 'delete', $organizacion->idOrganizacion], ['confirm' => __('Are you sure you want to delete # {0}?', $organizacion->idOrganizacion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organizacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organizacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizacion view content">
            <h3><?= h($organizacion->idOrganizacion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($organizacion->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($organizacion->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($organizacion->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroInterior') ?></th>
                    <td><?= h($organizacion->numeroInterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroExterior') ?></th>
                    <td><?= h($organizacion->numeroExterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdOrganizacion') ?></th>
                    <td><?= $this->Number->format($organizacion->idOrganizacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsentamiento') ?></th>
                    <td><?= $this->Number->format($organizacion->idAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoOrganizacion') ?></th>
                    <td><?= $this->Number->format($organizacion->idTipoOrganizacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($organizacion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $organizacion->idUsuarioModifica === null ? '' : $this->Number->format($organizacion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($organizacion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($organizacion->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $organizacion->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
