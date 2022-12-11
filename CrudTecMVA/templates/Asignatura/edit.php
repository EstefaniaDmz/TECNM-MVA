<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asignatura $asignatura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $asignatura->idAsignatura],
                ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->idAsignatura), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Asignatura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asignatura form content">
            <?= $this->Form->create($asignatura) ?>
            <fieldset>
                <legend><?= __('Edit Asignatura') ?></legend>
                <?php
                    echo $this->Form->control('clave');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('horasPractica');
                    echo $this->Form->control('horasTeoricas');
                    echo $this->Form->control('creditos');
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
