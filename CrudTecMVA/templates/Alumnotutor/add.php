<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnotutor $alumnotutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Alumnotutor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnotutor form content">
            <?= $this->Form->create($alumnotutor) ?>
            <fieldset>
                <legend><?= __('Add Alumnotutor') ?></legend>
                <?php
                    echo $this->Form->control('idAlumno');
                    echo $this->Form->control('idTutor');
                    echo $this->Form->control('parentesco');
                    echo $this->Form->control('contactoEmergencia');
                    echo $this->Form->control('recogeDocumento');
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
