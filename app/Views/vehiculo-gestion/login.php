    <?php echo $this->extend('layouts/plantilla'); ?> 

    <?php echo $this->section('contenido'); ?>
    <!-- Contenido de la Página-->
    <div class="w3-row w3-center">
        <div class="w3-col l3" style="height: 50px;"></div>
        <div class="w3-col l6">
            <form class="w3-container w3-card-4 w3-margin"
            method="post" action="<?php echo base_url('/login') ?>">
                <h2 class="w3-center">Iniciar Sesión</h2>
                <img src="<?php echo base_url('assets/img/login.svg') ?>" alt="login" style="width: 70%; height: 70%;">
                <?php if (session()->get('success')): ?>
                    <div class="w3-panel w3-green w3-large" role="alert">
                        <?php echo session()->get('success') ?>
                    </div>
                <?php endif ?>
                    
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-envelope w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="correo" id="" placeholder="Correo"
                        value="<?php echo set_value('correo') ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-key w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="password" name="contraseña" id="" placeholder="Contraseña"
                        value="<?php echo set_value('contraseña') ?>">
                    </div>
                </div>

                <?php if(isset($validation)): ?>
                <div class="w3-panel w3-red" role="alert">
                    <?php echo $validation->listErrors() ?>
                </div>
                <?php endif ?>

                <button class="w3-button w3-block w3-section w3-ripple 
                w3-padding w3-theme-button" type="submit">Enviar</button>
            </form>
        </div>
        <div class="w3-col l3" style="height: 50px;"></div>
    </div>
    
    <?php echo $this->endSection(); ?>