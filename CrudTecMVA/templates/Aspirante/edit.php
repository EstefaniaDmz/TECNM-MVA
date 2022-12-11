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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aspirante->idAspirante],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aspirante->idAspirante), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aspirante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aspirante form content">
            <?= $this->Form->create($aspirante) ?>
            <fieldset>
                <legend><?= __('Edit Aspirante') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidoPaterno');
                    echo $this->Form->control('apellidoMaterno');
                    echo $this->Form->control('curp');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('idGenero');
                    echo $this->Form->control('idPreparatoria');
                    echo $this->Form->control('promedioGeneral');
                    echo $this->Form->control('fechaEgreso', ['empty' => true]);
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('idCiudadNacimiento');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('numeroInterior');
                    echo $this->Form->control('numeroExterior');
                    echo $this->Form->control('idAsentamiento');
                    echo $this->Form->control('idPais');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea');
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
