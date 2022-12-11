<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoasentamiento $tipoasentamiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipoasentamiento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoasentamiento form content">
            <?= $this->Form->create($tipoasentamiento) ?>
            <fieldset>
                <legend><?= __('Edit Tipoasentamiento') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
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
