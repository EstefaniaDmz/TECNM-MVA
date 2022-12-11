<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudconsumible $solicitudconsumible
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Solicitudconsumible'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudconsumible form content">
            <?= $this->Form->create($solicitudconsumible) ?>
            <fieldset>
                <legend><?= __('Add Solicitudconsumible') ?></legend>
                <?php
                    echo $this->Form->control('idSolicitudLaboratorio');
                    echo $this->Form->control('idConsumible');
                    echo $this->Form->control('notas');
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
