<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipousuario $tipousuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipousuario->idTipoUsuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipousuario->idTipoUsuario), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipousuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipousuario form content">
            <?= $this->Form->create($tipousuario) ?>
            <fieldset>
                <legend><?= __('Edit Tipousuario') ?></legend>
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
