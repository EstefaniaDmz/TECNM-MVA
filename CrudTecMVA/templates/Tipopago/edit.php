<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopago $tipopago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipopago->idTipoPago],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipopago->idTipoPago), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipopago'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipopago form content">
            <?= $this->Form->create($tipopago) ?>
            <fieldset>
                <legend><?= __('Edit Tipopago') ?></legend>
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
