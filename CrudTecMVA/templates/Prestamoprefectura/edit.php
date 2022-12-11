<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestamoprefectura $prestamoprefectura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prestamoprefectura->idPrestamoPrefectura],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prestamoprefectura->idPrestamoPrefectura), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Prestamoprefectura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prestamoprefectura form content">
            <?= $this->Form->create($prestamoprefectura) ?>
            <fieldset>
                <legend><?= __('Edit Prestamoprefectura') ?></legend>
                <?php
                    echo $this->Form->control('idActivoFijo');
                    echo $this->Form->control('fechaSalida');
                    echo $this->Form->control('fechaRegreso', ['empty' => true]);
                    echo $this->Form->control('idDocente');
                    echo $this->Form->control('idPrefecto');
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
