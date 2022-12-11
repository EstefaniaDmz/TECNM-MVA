<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ficha $ficha
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ficha->idFicha],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->idFicha), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ficha'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ficha form content">
            <?= $this->Form->create($ficha) ?>
            <fieldset>
                <legend><?= __('Edit Ficha') ?></legend>
                <?php
                    echo $this->Form->control('folio');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('idTurno');
                    echo $this->Form->control('idCarreraPrimera');
                    echo $this->Form->control('idCarreraSegunda');
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
