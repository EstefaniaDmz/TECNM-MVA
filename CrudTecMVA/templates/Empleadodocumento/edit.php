<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadodocumento $empleadodocumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empleadodocumento->idEmpleadoDocumento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empleadodocumento->idEmpleadoDocumento), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empleadodocumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadodocumento form content">
            <?= $this->Form->create($empleadodocumento) ?>
            <fieldset>
                <legend><?= __('Edit Empleadodocumento') ?></legend>
                <?php
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idDocumento');
                    echo $this->Form->control('fechaEntrega');
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
