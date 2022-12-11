<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignaturadocente $asignaturadocente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Asignaturadocente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignaturadocente form content">
            <?= $this->Form->create($asignaturadocente) ?>
            <fieldset>
                <legend><?= __('Add Asignaturadocente') ?></legend>
                <?php
                    echo $this->Form->control('idAsignatura');
                    echo $this->Form->control('idDocente');
                    echo $this->Form->control('idHora');
                    echo $this->Form->control('idPeriodo');
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
