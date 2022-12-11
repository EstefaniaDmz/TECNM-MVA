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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $preparatorium->idPreparatoria],
                ['confirm' => __('Are you sure you want to delete # {0}?', $preparatorium->idPreparatoria), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Preparatoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preparatoria form content">
            <?= $this->Form->create($preparatorium) ?>
            <fieldset>
                <legend><?= __('Edit Preparatorium') ?></legend>
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
