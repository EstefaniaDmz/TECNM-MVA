<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciudad $ciudad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ciudad->idCiudad],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ciudad->idCiudad), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ciudad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciudad form content">
            <?= $this->Form->create($ciudad) ?>
            <fieldset>
                <legend><?= __('Edit Ciudad') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('idEstado');
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
