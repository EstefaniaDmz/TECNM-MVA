<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudherramientum $solicitudherramientum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Solicitudherramienta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudherramienta form content">
            <?= $this->Form->create($solicitudherramientum) ?>
            <fieldset>
                <legend><?= __('Add Solicitudherramientum') ?></legend>
                <?php
                    echo $this->Form->control('idSolicitudLaboratorio');
                    echo $this->Form->control('idActivoFijo');
                    echo $this->Form->control('fecha');
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
