<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignaturacarrera $asignaturacarrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Asignaturacarrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignaturacarrera form content">
            <?= $this->Form->create($asignaturacarrera) ?>
            <fieldset>
                <legend><?= __('Add Asignaturacarrera') ?></legend>
                <?php
                    echo $this->Form->control('idAsignatura');
                    echo $this->Form->control('idCarrera');
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
