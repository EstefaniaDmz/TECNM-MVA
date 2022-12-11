<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumnoasignaturadocente $alumnoasignaturadocente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alumnoasignaturadocente->idAlumnoAsignaturaDocente],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alumnoasignaturadocente->idAlumnoAsignaturaDocente), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Alumnoasignaturadocente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumnoasignaturadocente form content">
            <?= $this->Form->create($alumnoasignaturadocente) ?>
            <fieldset>
                <legend><?= __('Edit Alumnoasignaturadocente') ?></legend>
                <?php
                    echo $this->Form->control('idAsignaturaDocente');
                    echo $this->Form->control('idAlumno');
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
