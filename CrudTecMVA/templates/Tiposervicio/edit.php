<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio $tiposervicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposervicio->idTipoServicio],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->idTipoServicio), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tiposervicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tiposervicio form content">
            <?= $this->Form->create($tiposervicio) ?>
            <fieldset>
                <legend><?= __('Edit Tiposervicio') ?></legend>
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
