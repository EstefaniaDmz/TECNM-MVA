<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnoactividad $alumnoactividad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Alumnoactividad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnoactividad form content">
            <?= $this->Form->create($alumnoactividad) ?>
            <fieldset>
                <legend><?= __('Add Alumnoactividad') ?></legend>
                <?php
                    echo $this->Form->control('nivel');
                    echo $this->Form->control('observacion');
                    echo $this->Form->control('valorCredito');
                    echo $this->Form->control('idPeriodo');
                    echo $this->Form->control('idAlumno');
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idActividad');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea');
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
