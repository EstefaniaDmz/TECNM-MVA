<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idUsuario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuario view content">
            <h3><?= h($usuario->idUsuario) ?></h3>
            <table>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($usuario->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($usuario->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('NombreCompleto') ?></th>
                    <td><?= h($usuario->nombreCompleto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($usuario->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave') ?></th>
                    <td><?= h($usuario->clave) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuario') ?></th>
                    <td><?= $this->Number->format($usuario->idUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoUsuario') ?></th>
                    <td><?= $this->Number->format($usuario->idTipoUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $usuario->estatus === null ? '' : $this->Number->format($usuario->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $usuario->idUsuarioCrea === null ? '' : $this->Number->format($usuario->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $usuario->idUsuarioModifica === null ? '' : $this->Number->format($usuario->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($usuario->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($usuario->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
