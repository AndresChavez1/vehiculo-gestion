<?php echo $this->extend('layouts/plantilla'); ?>

<?php echo $this->section('contenido'); ?>

<h1 class="w3-center">Tablero <?php echo session()->get('nombres'). ' '. session()->get('apellidos') ?></h1>

  <?php if (session()->get('rol') == '1' || session()->get('rol') == '3' || session()->get('rol') == '4'
        || session()->get('rol') == '5'): ?>

    <div class="w3-row-padding w3-margin-top">
    <a href=<?php echo base_url('personal'); ?>>
        <div class="w3-col tablero w3-hover-text-theme w3-margin">
          <div class="w3-card-4 w3-center icon-container w3-round-xlarge w3-round-xlarge">
            <img src="<?php echo base_url('assets/img/gestion_personal.svg'); ?>" alt="Gestión de Personal" class="svg">
            <div class="w3-container w3-center">
              <h3>Gestión de Personal</h3>
            </div>
          </div>
        </div>
        </a>

        <a href="<?php echo base_url('vehiculo'); ?>">
        <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
              <img src="<?php echo base_url('assets/img/gestion_vehicular.svg'); ?>" class="svg" alt="Gestión Vehicular">
              <div class="w3-container w3-center">
                <h3>Gestión Vehicular</h3>
              </div>
            </div>
          </div>
          </a>

          <a href="<?php echo base_url('dependencia'); ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
              <img src="<?php echo base_url('assets/img/gestion_dependencias.svg'); ?>" class="svg" alt="Gestión de dependencias">
              <div class="w3-container w3-center">
                <h3>Gestión de Dependencias</h3>
              </div>
            </div>
          </div>
          </a>

          <a href="<?php echo base_url('mantenimiento'); ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
              <img src="<?php echo base_url('assets/img/mantenimiento_vehicular.svg'); ?>" class="svg" alt="Mantenimiento Vehicular">
              <div class="w3-container w3-center">
                <h3>Mantenimiento Vehicular</h3>
              </div>
            </div>
          </div>
          </a>
  
          <a href="<?php echo base_url('asignacion') ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
              <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
                <img src="<?php echo base_url('assets/img/asignacion_recursos.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Asignación de Recursos</h3>
                </div>
              </div>
            </div>
            </a>
  
            <a href="<?php echo base_url('perfil') ?>">
            <div class="w3-col tablero w3-hover-text-theme w3-margin">
              <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
                <img src="<?php echo base_url('assets/img/mi_cuenta.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Mi cuenta</h3>
                </div>
              </div>
            </div>
            </a>

          <a href="<?php echo base_url('cambiar-contrasenia') ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
             <img src="<?php echo base_url('assets/img/cambiar_contraseña.svg'); ?>" class="svg" alt="ícono de Contraseña segura">
              <div class="w3-container w3-center">
                <h3>Cambiar Contraseña</h3>
              </div>
            </div>
          </div>
          </a>

          <a href="<?php echo base_url('pertrecho'); ?>">
      <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
             <img src="<?php echo base_url('assets/img/pertrecho.svg'); ?>" class="svg" alt="Gestión de Pertrecho">
              <div class="w3-container w3-center">
                <h3>Pertrecho</h3>
              </div>
            </div>
          </div>
          </a>
  
          <a href="<?php echo base_url('/logout') ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
              <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
                <img src="<?php echo base_url('assets/img/login.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Cerrar Sesión</h3>
                </div>
              </div>
              </a>
            </div>
    </div>
    
    
    <?php else: ?>


      <a href="<?php echo base_url('mantenimiento'); ?>">
      <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
             <img src="<?php echo base_url('assets/img/mantenimiento_vehicular.svg'); ?>" class="svg" alt="Mantenimiento Vehicular">
              <div class="w3-container w3-center">
                <h3>Mantenimiento Vehicular</h3>
              </div>
            </div>
          </div>
          </a>

          <a href="<?php echo base_url('pertrecho'); ?>">
      <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
             <img src="<?php echo base_url('assets/img/pertrecho.svg'); ?>" class="svg" alt="Gestión de Pertrecho">
              <div class="w3-container w3-center">
                <h3>Pertrecho</h3>
              </div>
            </div>
          </div>
          </a>
  
          <a href="<?php echo base_url('perfil') ?>">
            <div class="w3-col tablero w3-hover-text-theme w3-margin">
              <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
                <img src="<?php echo base_url('assets/img/mi_cuenta.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Mi cuenta</h3>
                </div>
              </div>
            </div>
            </a>

            <a href="<?php echo base_url('cambiar-contrasenia') ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
            <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
              <img src="<?php echo base_url('assets/img/cambiar_contraseña.svg'); ?>" class="svg" alt="ícono de Contraseña segura">
              <div class="w3-container w3-center">
                <h3>Cambiar Contraseña</h3>
              </div>
            </div>
          </div>
          </a>
  
          <a href="<?php echo base_url('/logout') ?>">
          <div class="w3-col tablero w3-hover-text-theme w3-margin">
              <div class="w3-card-4 w3-center icon-container w3-round-xlarge">
                <img src="<?php echo base_url('assets/img/login.svg'); ?>" class="svg">
                <div class="w3-container w3-center">
                  <h3>Cerrar Sesión</h3>
                </div>
              </div>
            </div>
            </a>
    </div>

    <?php endif; ?>
<?php echo $this->endSection(); ?>