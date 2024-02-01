<?php echo $this->extend('layouts/plantilla'); ?>

<?php echo $this->section('contenido'); ?>

<!-- Contenido de la Página-->

<div class="row w3-center">
        <div class="w3-col l3" style="height: 50px;"></div>
        <div class="w3-col l6">
            <form class="w3-container w3-card-4 w3-margin" method="post"
            action="<?php echo base_url('/perfil')?>">
                <h2 class="w3-center"><?php echo $user['nombres']. ' '. $user['apellidos'] ?></h2>
                <img src="<?php echo base_url('assets/img/registro.svg') ?>" alt="registro" style="width: 80%; height: 80%;">

                <?php if (session()->get('success')): ?>
                    <div class="w3-panel w3-green w3-large" role="alert">
                        <?php echo session()->get('success') ?>
                    </div>
                <?php endif ?>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-address-book w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <select class="w3-select" readonly id="nombre_rol">
                            <option value="<?php echo $user['rol'];?>"><?php echo $user['rol'];?></option>
                        </select>
                    </div>
                </div>  

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-user w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="nombres" id="" placeholder="Nombres"
                        value="<?php echo set_value('nombres', $user['nombres']) ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-user w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="apellidos" id="" placeholder="Apellidos"
                        value="<?php echo set_value('apellidos', $user['apellidos']) ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-id-card w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" readonly id="" placeholder="Cédula"
                        value="<?php echo $user['cedula']?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-calendar-days w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="date" name="fecha_nacimiento" id="" placeholder="Fecha de Nacimiento"
                        value="<?php echo set_value('fecha_nacimiento', $user['fecha_nacimiento']) ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-droplet w3-xxlarge"></i></div>
                    <div class="w3-rest">
                    <select class="w3-select" readonly id="">
                            <option value="<?php echo $user['tipo_sangre'];?>"><?php echo $user['tipo_sangre'];?></option>
                        </select>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-city w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="ciudad_nacimiento" id="ciudad_nacimiento" placeholder="Ciudad de Nacimiento"
                        value="<?php echo set_value('ciudad_nacimiento', $user['ciudad_nacimiento']) ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-phone w3-xxlarge"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" type="text" name="telefono" id="" placeholder="Telefono"
                        value="<?php echo set_value('telefono', $user['telefono']) ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width: 50px;"><i class="fa-solid fa-ranking-star w3-xxlarge"></i></div>
                    <div class="w3-rest">
                    <select class="w3-select" readonly id="">
                            <option value="<?php echo $user['rango'];?>"><?php echo $user['rango'];?></option>
                        </select>
                    </div>
                </div>
                <?php if(isset($validation)): ?>
                <div class="w3-panel w3-red" role="alert">
                    <?php echo $validation->listErrors() ?>
                </div>
                <?php endif ?>
                <button class="w3-button w3-block w3-section w3-ripple w3-padding w3-theme-button" type="submit">Actualizar</button>
                </div>
                </div>
<?php echo $this->endSection(); ?>