<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enfermeriaservicio $enfermeriaservicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enfermeriaservicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enfermeriaservicio form content">
            <?= $this->Form->create($enfermeriaservicio) ?>
            <fieldset>
                <legend><?= __('Add Enfermeriaservicio') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idAlumno');
                    echo $this->Form->control('idServicio');
                    echo $this->Form->control('idTipoUrgencia');
                    echo $this->Form->control('observacion');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea', ['empty' => true]);
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
