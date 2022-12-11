<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviciosocial $serviciosocial
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $serviciosocial->idServicioSocial],
                ['confirm' => __('Are you sure you want to delete # {0}?', $serviciosocial->idServicioSocial), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Serviciosocial'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviciosocial form content">
            <?= $this->Form->create($serviciosocial) ?>
            <fieldset>
                <legend><?= __('Edit Serviciosocial') ?></legend>
                <?php
                    echo $this->Form->control('idAlumno');
                    echo $this->Form->control('fechaInicio');
                    echo $this->Form->control('fechaFinal');
                    echo $this->Form->control('idOrganizacion');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea');
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
