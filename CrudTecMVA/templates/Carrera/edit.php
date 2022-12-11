<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carrera->idCarrera],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->idCarrera), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carrera'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carrera form content">
            <?= $this->Form->create($carrera) ?>
            <fieldset>
                <legend><?= __('Edit Carrera') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('clave');
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
