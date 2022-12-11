<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cursoextraordinario $cursoextraordinario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cursoextraordinario->idCursoExtraordinario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cursoextraordinario->idCursoExtraordinario), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cursoextraordinario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursoextraordinario form content">
            <?= $this->Form->create($cursoextraordinario) ?>
            <fieldset>
                <legend><?= __('Edit Cursoextraordinario') ?></legend>
                <?php
                    echo $this->Form->control('idTipoCursoMateria');
                    echo $this->Form->control('idDocente');
                    echo $this->Form->control('fechaInicio');
                    echo $this->Form->control('fechaFinal');
                    echo $this->Form->control('totalHoras');
                    echo $this->Form->control('totalAlumnos');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('precioIndividual');
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
