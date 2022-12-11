<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipourgencium $tipourgencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipourgencium->idTipoUrgencia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipourgencium->idTipoUrgencia), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipourgencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipourgencia form content">
            <?= $this->Form->create($tipourgencium) ?>
            <fieldset>
                <legend><?= __('Edit Tipourgencium') ?></legend>
                <?php
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
