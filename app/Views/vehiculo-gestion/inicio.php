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
            <img src="<?php echo base_url('assets/img/police-car.svg')?>" alt="Police Car">
        </div>
    </div>


    <?php echo $this->endSection(); ?>

