<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tutor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tutor form content">
            <?= $this->Form->create($tutor) ?>
            <fieldset>
                <legend><?= __('Add Tutor') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidoPaterno');
                    echo $this->Form->control('apellidoMaterno');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('curp');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('numeroInterior');
                    echo $this->Form->control('numeroExterior');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('idAsentamiento');
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
