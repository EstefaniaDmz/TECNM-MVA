<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aspirante> $aspirante
 */
?>
<div class="aspirante index content">
    <?= $this->Html->link(__('New Aspirante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aspirante') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAspirante') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                    <th><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                    <th><?= $this->Paginator->sort('curp') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('idGenero') ?></th>
                    <th><?= $this->Paginator->sort('idPreparatoria') ?></th>
                    <th><?= $this->Paginator->sort('promedioGeneral') ?></th>
                    <th><?= $this->Paginator->sort('fechaEgreso') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('idCiudadNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('numeroInterior') ?></th>
                    <th><?= $this->Paginator->sort('numeroExterior') ?></th>
                    <th><?= $this->Paginator->sort('idAsentamiento') ?></th>
                    <th><?= $this->Paginator->sort('idPais') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aspirante as $aspirante): ?>
                <tr>
                    <td><?= $this->Number->format($aspirante->idAspirante) ?></td>
                    <td><?= h($aspirante->nombre) ?></td>
                    <td><?= h($aspirante->apellidoPaterno) ?></td>
                    <td><?= h($aspirante->apellidoMaterno) ?></td>
                    <td><?= h($aspirante->curp) ?></td>
                    <td><?= h($aspirante->correo) ?></td>
                    <td><?= h($aspirante->telefono) ?></td>
                    <td><?= $this->Number->format($aspirante->idGenero) ?></td>
                    <td><?= $this->Number->format($aspirante->idPreparatoria) ?></td>
                    <td><?= $this->Number->format($aspirante->promedioGeneral) ?></td>
                    <td><?= h($aspirante->fechaEgreso) ?></td>
                    <td><?= h($aspirante->fechaNacimiento) ?></td>
                    <td><?= $this->Number->format($aspirante->idCiudadNacimiento) ?></td>
                    <td><?= h($aspirante->calle) ?></td>
                    <td><?= h($aspirante->numeroInterior) ?></td>
                    <td><?= h($aspirante->numeroExterior) ?></td>
                    <td><?= $this->Number->format($aspirante->idAsentamiento) ?></td>
                    <td><?= $this->Number->format($aspirante->idPais) ?></td>
                    <td><?= h($aspirante->estatus) ?></td>
                    <td><?= $this->Number->format($aspirante->idUsuarioCrea) ?></td>
                    <td><?= h($aspirante->fechaCrea) ?></td>
                    <td><?= $this->Number->format($aspirante->idUsuarioModifica) ?></td>
                    <td><?= h($aspirante->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aspirante->idAspirante]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aspirante->idAspirante]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aspirante->idAspirante], ['confirm' => __('Are you sure you want to delete # {0}?', $aspirante->idAspirante)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
