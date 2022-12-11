<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preparatorium $preparatorium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Preparatoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preparatoria form content">
            <?= $this->Form->create($preparatorium) ?>
            <fieldset>
                <legend><?= __('Add Preparatorium') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('idAsentamiento');
                    echo $this->Form->control('idTipoPreparatoria');
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
