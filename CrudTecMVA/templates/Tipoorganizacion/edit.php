<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoorganizacion $tipoorganizacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoorganizacion->idTipoOrganizacion],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoorganizacion->idTipoOrganizacion), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipoorganizacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoorganizacion form content">
            <?= $this->Form->create($tipoorganizacion) ?>
            <fieldset>
                <legend><?= __('Edit Tipoorganizacion') ?></legend>
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
