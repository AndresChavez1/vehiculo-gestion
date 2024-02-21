<?php echo $this->extend('layouts/plantilla'); ?>


    <?php echo $this->section('contenido'); ?>
    <!--Contenido de la página principal-->
    <h2 class="w3-center w3-section">Bienvenido Al Sistema de Gestión Vehicular de la Policía Nacional</h2>
    <div class="w3-container w3-padding-top-64 w3-section">
        <article class="w3-container w3-third w3-center">
            <h1>Vehiculo Gestion</h1>
            <p>Vehiculo Gestion es un sitio web que se encarga de la gestión de los recursos de la Policía Nacional, así como el mantenimiento preventivo de los vehículos pertenecientes a esta. Nuestro objetivo es garantizar que los vehículos de la Policía Nacional estén en óptimas condiciones para su uso en las operaciones policiales.</p>
        </article>
        <div class="w3-container w3-twothird w3-center img-section">
            <img src="<?php echo base_url('assets/img/Gemini_Image.png')?>" alt="Auto">
        </div>
    </div>

    <h2 class="w3-center">Algunos de nuestros servicios son: </h2>
    <div class="w3-row-padding w3-margin-top">
        <div class="w3-col tablero w3-hover-text-theme w3-margin">
          <div class="w3-card-4 icon-container w3-round-xlarge ">
            <img src="<?php echo base_url('assets/img/gestion_personal.svg')?>" alt="Gestión de personal" class="svg">
            <div class="w3-container w3-center">
              <h3>Gestión del Personal</h3>
            </div>
          </div>
        </div>
      
        <div class="w3-col tablero w3-hover-text-theme w3-margin">
          <div class="w3-card-4 icon-container w3-round-xlarge">
            <img src="<?php echo base_url('assets/img/gestion_vehicular.svg')?>" alt="Gestión vehicular" class="svg">
            <div class="w3-container w3-center">
              <h3>Gestión Vehicular</h3>
            </div>
          </div>
        </div>
  
      
        <div class="w3-col tablero w3-hover-text-theme w3-margin">
          <div class="w3-card-4 icon-container w3-round-xlarge">
            <img src="<?php echo base_url('assets/img/gestion_dependencias.svg')?>" alt="Gestión de dependencias" class="svg">
            <div class="w3-container w3-center">
              <h3>Gestión de Dependencias</h3>
            </div>
          </div>
        </div>
    </div>


    <?php echo $this->endSection(); ?>

