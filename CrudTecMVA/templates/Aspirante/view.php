<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspirante $aspirante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aspirante'), ['action' => 'edit', $aspirante->idAspirante], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aspirante'), ['action' => 'delete', $aspirante->idAspirante], ['confirm' => __('Are you sure you want to delete # {0}?', $aspirante->idAspirante), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aspirante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aspirante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aspirante view content">
            <h3><?= h($aspirante->idAspirante) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($aspirante->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($aspirante->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($aspirante->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curp') ?></th>
                    <td><?= h($aspirante->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($aspirante->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($aspirante->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($aspirante->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroInterior') ?></th>
                    <td><?= h($aspirante->numeroInterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroExterior') ?></th>
                    <td><?= h($aspirante->numeroExterior) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAspirante') ?></th>
                    <td><?= $this->Number->format($aspirante->idAspirante) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdGenero') ?></th>
                    <td><?= $this->Number->format($aspirante->idGenero) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPreparatoria') ?></th>
                    <td><?= $this->Number->format($aspirante->idPreparatoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('PromedioGeneral') ?></th>
                    <td><?= $this->Number->format($aspirante->promedioGeneral) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCiudadNacimiento') ?></th>
                    <td><?= $this->Number->format($aspirante->idCiudadNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAsentamiento') ?></th>
                    <td><?= $this->Number->format($aspirante->idAsentamiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPais') ?></th>
                    <td><?= $this->Number->format($aspirante->idPais) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $this->Number->format($aspirante->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $this->Number->format($aspirante->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaEgreso') ?></th>
                    <td><?= h($aspirante->fechaEgreso) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($aspirante->fechaNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($aspirante->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($aspirante->fechaModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $aspirante->estatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
