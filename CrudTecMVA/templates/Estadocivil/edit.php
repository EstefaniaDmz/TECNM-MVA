<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadocivil $estadocivil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estadocivil->idEstadoCivil],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estadocivil->idEstadoCivil), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estadocivil'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estadocivil form content">
            <?= $this->Form->create($estadocivil) ?>
            <fieldset>
                <legend><?= __('Edit Estadocivil') ?></legend>
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
