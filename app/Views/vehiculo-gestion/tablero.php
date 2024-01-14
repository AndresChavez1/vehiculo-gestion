<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<h1 class="w3-center">Tablero</h1>

    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third w3-section w3-hover-text-theme">
          <div class="w3-card-4 w3-center icon-container">
            <a href=<?php echo base_url('personal'); ?>><img src="<?php echo base_url('assets/img/gestion_personal.svg'); ?>" alt="Gestión de Personal" class="svg"></a>
            <div class="w3-container w3-center">
              <a href="<?php echo base_url('personal'); ?>"><h3>Gestión de Personal</h3></a>
            </div>
          </div>
        </div>

        <div class="w3-third w3-section w3-hover-text-theme">
            <div class="w3-card-4 w3-center icon-container">
              <a href="<?php echo base_url('vehiculo'); ?>"><img src="<?php echo base_url('assets/img/gestion_vehicular.svg'); ?>" class="svg" alt="Gestión Vehicular"></a>
              <div class="w3-container w3-center">
                <a href="<?php echo base_url('vehiculo'); ?>"><h3>Gestión Vehicular</h3></a>
              </div>
            </div>
          </div>

          <div class="w3-third w3-section w3-hover-text-theme">
            <div class="w3-card-4 w3-center icon-container">
              <a href="<?php echo base_url('dependencia'); ?>"><img src="<?php echo base_url('assets/img/gestion_dependencias.svg'); ?>" class="svg" alt="Gestión de dependencias"></a>
              <div class="w3-container w3-center">
                <a href="<?php echo base_url('dependencia'); ?>"><h3>Gestión de Dependencias</h3></a>
              </div>
            </div>
          </div>

          <div class="w3-third w3-section w3-hover-text-theme">
            <div class="w3-card-4 w3-center icon-container">
              <a href="<?php echo base_url('mantenimiento'); ?>"><img src="<?php echo base_url('assets/img/mantenimiento_vehicular.svg'); ?>" class="svg" alt="Mantenimiento Vehicular"></a>
              <div class="w3-container w3-center">
                <a href="<?php echo base_url('mantenimiento'); ?>"><h3>Mantenimiento Vehicular</h3></a>
              </div>
            </div>
          </div>
  
          <div class="w3-third w3-section w3-hover-text-theme">
            <a href="<?php echo base_url('asignar-recursos') ?>">
              <div class="w3-card-4 w3-center icon-container">
                <img src="<?php echo base_url('assets/img/asignacion_recursos.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Asignación de Recursos</h3>
                </div>
              </div>
              </a>
            </div>
  
            <div class="w3-third w3-section w3-hover-text-theme">
              <a href="<?php echo base_url('mi-cuenta') ?>">
              <div class="w3-card-4 w3-center icon-container">
                <img src="<?php echo base_url('assets/img/mi_cuenta.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Mi cuenta</h3>
                </div>
              </div>
              </a>
            </div>
          <div class="w3-third w3-section w3-hover-text-theme">
            <div class="w3-card-4 w3-center icon-container">
              <a href="<?php echo base_url('cambiar-contraseña') ?>"><img src="<?php echo base_url('assets/img/cambiar_contraseña.svg'); ?>" class="svg" alt="ícono de Contraseña segura"></a>
              <div class="w3-container w3-center">
                <a href="<?php echo base_url('cambiar-contraseña') ?>"><h3>Cambiar Contraseña</h3></a>
              </div>
            </div>
          </div>
  
          <div class="w3-third w3-section w3-hover-text-theme">
            <a href="<?php echo base_url('inicio') ?>">
              <div class="w3-card-4 w3-center icon-container">
                <img src="<?php echo base_url('assets/img/login.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Cerrar Sesión</h3>
                </div>
              </div>
              </a>
            </div>
    </div>
<?php echo $this->endSection('content'); ?>