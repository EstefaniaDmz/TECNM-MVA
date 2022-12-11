<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Edificio $edificio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $edificio->idEdificio],
                ['confirm' => __('Are you sure you want to delete # {0}?', $edificio->idEdificio), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Edificio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="edificio form content">
            <?= $this->Form->create($edificio) ?>
            <fieldset>
                <legend><?= __('Edit Edificio') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
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
