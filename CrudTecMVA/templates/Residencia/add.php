<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Residencium $residencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Residencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="residencia form content">
            <?= $this->Form->create($residencium) ?>
            <fieldset>
                <legend><?= __('Add Residencium') ?></legend>
                <?php
                    echo $this->Form->control('idAlumno');
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idOrganizacion');
                    echo $this->Form->control('fechaInicio');
                    echo $this->Form->control('fechaFinal');
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
