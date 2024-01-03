<?php echo $this->extend('layouts/plantilla'); ?>

<?php echo $this->section('contenido'); ?>

<!-- Contenido de la Página-->

<div class="row w3-center">
        <div class="w3-col l3" style="height: 50px;"></div>
        <div class="w3-col l6">
            <form class="w3-container w3-card-4 w3-margin">
                <h2 class="w3-center">Registro</h2>
                <img src="<?php echo base_url('assets/img/registro.svg') ?>" alt="registro" style="width: 80%; height: 80%;">

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-address-book w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <select class="w3-select" name="option" id="">
                            <option value="" disabled selected>Selecciona tu Opción</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                </div>  

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-user w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="" id="" placeholder="Nombre">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-user w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="" id="" placeholder="Apellido">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-envelope w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="" id="" placeholder="Correo">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-key w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="" id="" placeholder="Contraseña">
                    </div>
                </div>

                <button class="w3-button w3-block w3-section w3-ripple w3-padding w3-theme-button">Enviar</button>
                </div>
                </div>
<?php echo $this->endSection(); ?>