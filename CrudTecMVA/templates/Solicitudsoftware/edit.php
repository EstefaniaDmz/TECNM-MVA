<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudsoftware $solicitudsoftware
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitudsoftware->idSolicitudSoftware],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudsoftware->idSolicitudSoftware), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Solicitudsoftware'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="solicitudsoftware form content">
            <?= $this->Form->create($solicitudsoftware) ?>
            <fieldset>
                <legend><?= __('Edit Solicitudsoftware') ?></legend>
                <?php
                    echo $this->Form->control('idSolicitudLaboratorio');
                    echo $this->Form->control('idSoftware');
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
