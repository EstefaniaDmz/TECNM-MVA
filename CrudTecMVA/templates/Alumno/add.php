<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno $alumno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Alumno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alumno form content">
            <?= $this->Form->create($alumno) ?>
            <fieldset>
                <legend><?= __('Add Alumno') ?></legend>
                <?php
                    echo $this->Form->control('matricula');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidoPaterno');
                    echo $this->Form->control('apellidoMaterno');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('curp');
                    echo $this->Form->control('rfc');
                    echo $this->Form->control('idGenero');
                    echo $this->Form->control('discapacidad');
                    echo $this->Form->control('lenguaIndigena');
                    echo $this->Form->control('nss');
                    echo $this->Form->control('idInstitucionSalud');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('correoPersonal');
                    echo $this->Form->control('correoInstitucional');
                    echo $this->Form->control('idCarrera');
                    echo $this->Form->control('semestre');
                    echo $this->Form->control('idTurno');
                    echo $this->Form->control('idPreparatoria');
                    echo $this->Form->control('promedioGeneralPrepa');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('numeroInterior');
                    echo $this->Form->control('numeroExterior');
                    echo $this->Form->control('idAsentamiento');
                    echo $this->Form->control('idCiudadNacimiento');
                    echo $this->Form->control('idTipoSangre');
                    echo $this->Form->control('alergia');
                    echo $this->Form->control('lugarTrabajo');
                    echo $this->Form->control('horarioTrabajo');
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
