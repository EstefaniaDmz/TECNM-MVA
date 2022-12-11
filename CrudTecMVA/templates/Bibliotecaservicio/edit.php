<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bibliotecaservicio $bibliotecaservicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bibliotecaservicio->idBibliotecaServicio],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bibliotecaservicio->idBibliotecaServicio), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bibliotecaservicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bibliotecaservicio form content">
            <?= $this->Form->create($bibliotecaservicio) ?>
            <fieldset>
                <legend><?= __('Edit Bibliotecaservicio') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('idServicio');
                    echo $this->Form->control('idPuesto');
                    echo $this->Form->control('idCarrera');
                    echo $this->Form->control('idTurno');
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
