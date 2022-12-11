<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviciosocial $serviciosocial
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Serviciosocial'), ['action' => 'edit', $serviciosocial->idServicioSocial], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Serviciosocial'), ['action' => 'delete', $serviciosocial->idServicioSocial], ['confirm' => __('Are you sure you want to delete # {0}?', $serviciosocial->idServicioSocial), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Serviciosocial'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Serviciosocial'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviciosocial view content">
            <h3><?= h($serviciosocial->idServicioSocial) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdServicioSocial') ?></th>
                    <td><?= $this->Number->format($serviciosocial->idServicioSocial) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAlumno') ?></th>
                    <td><?= $this->Number->format($serviciosocial->idAlumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdOrganizacion') ?></th>
                    <td><?= $this->Number->format($serviciosocial->idOrganizacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $serviciosocial->estatus === null ? '' : $this->Number->format($serviciosocial->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($serviciosocial->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($serviciosocial->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($serviciosocial->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($serviciosocial->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($serviciosocial->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($serviciosocial->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
