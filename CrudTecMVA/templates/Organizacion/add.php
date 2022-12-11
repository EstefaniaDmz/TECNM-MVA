<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizacion $organizacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Organizacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizacion form content">
            <?= $this->Form->create($organizacion) ?>
            <fieldset>
                <legend><?= __('Add Organizacion') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('rfc');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('numeroInterior');
                    echo $this->Form->control('numeroExterior');
                    echo $this->Form->control('idAsentamiento');
                    echo $this->Form->control('idTipoOrganizacion');
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
