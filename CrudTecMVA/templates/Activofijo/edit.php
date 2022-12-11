<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activofijo $activofijo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activofijo->idActivoFijo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activofijo->idActivoFijo), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activofijo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="activofijo form content">
            <?= $this->Form->create($activofijo) ?>
            <fieldset>
                <legend><?= __('Edit Activofijo') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('marca');
                    echo $this->Form->control('modelo');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('idArea');
                    echo $this->Form->control('idTipoActivoFijo');
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
