<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocursomaterium $tipocursomaterium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipocursomaterium->idTipoCursoMateria],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipocursomaterium->idTipoCursoMateria), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipocursomateria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipocursomateria form content">
            <?= $this->Form->create($tipocursomaterium) ?>
            <fieldset>
                <legend><?= __('Edit Tipocursomaterium') ?></legend>
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
