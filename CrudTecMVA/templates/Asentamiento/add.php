<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asentamiento $asentamiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Asentamiento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="asentamiento form content">
            <?= $this->Form->create($asentamiento) ?>
            <fieldset>
                <legend><?= __('Add Asentamiento') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('codigoPostal');
                    echo $this->Form->control('idTipoAsentamiento');
                    echo $this->Form->control('idCiudad');
                    echo $this->Form->control('idZona');
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
