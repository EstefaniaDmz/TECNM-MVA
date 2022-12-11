<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnocursoextra $alumnocursoextra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Alumnocursoextra'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnocursoextra form content">
            <?= $this->Form->create($alumnocursoextra) ?>
            <fieldset>
                <legend><?= __('Add Alumnocursoextra') ?></legend>
                <?php
                    echo $this->Form->control('idAlumno');
                    echo $this->Form->control('idCursoExtraordinario');
                    echo $this->Form->control('idPago');
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
