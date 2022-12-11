<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Usuario> $usuario
 */
?>
<div class="usuario index content">
    <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idUsuario') ?></th>
                    <th><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                    <th><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                    <th><?= $this->Paginator->sort('nombreCompleto') ?></th>
                    <th><?= $this->Paginator->sort('idTipoUsuario') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('clave') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->idUsuario) ?></td>
                    <td><?= h($usuario->apellidoMaterno) ?></td>
                    <td><?= h($usuario->apellidoPaterno) ?></td>
                    <td><?= h($usuario->nombreCompleto) ?></td>
                    <td><?= $this->Number->format($usuario->idTipoUsuario) ?></td>
                    <td><?= h($usuario->correo) ?></td>
                    <td><?= h($usuario->clave) ?></td>
                    <td><?= $usuario->estatus === null ? '' : $this->Number->format($usuario->estatus) ?></td>
                    <td><?= $usuario->idUsuarioCrea === null ? '' : $this->Number->format($usuario->idUsuarioCrea) ?></td>
                    <td><?= h($usuario->fechaCrea) ?></td>
                    <td><?= $usuario->idUsuarioModifica === null ? '' : $this->Number->format($usuario->idUsuarioModifica) ?></td>
                    <td><?= h($usuario->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->idUsuario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->idUsuario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]) ?>
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
