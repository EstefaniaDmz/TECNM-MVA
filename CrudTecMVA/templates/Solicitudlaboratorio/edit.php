<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudlaboratorio $solicitudlaboratorio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitudlaboratorio->idSolicitudLaboratorio],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudlaboratorio->idSolicitudLaboratorio), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Solicitudlaboratorio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudlaboratorio form content">
            <?= $this->Form->create($solicitudlaboratorio) ?>
            <fieldset>
                <legend><?= __('Edit Solicitudlaboratorio') ?></legend>
                <?php
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('numeroAlumnos');
                    echo $this->Form->control('notas');
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
