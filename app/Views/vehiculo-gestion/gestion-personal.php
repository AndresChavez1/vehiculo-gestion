<?php echo $this->extend('layouts/plantilla-interna') ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la página Gestión Personal -->
<div class="w3-row-padding">
        <div class="w3-container w3-third">
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Buscar" id="input" onkeyup="search()">
        </div>
        <div class="w3-container w3-col l1 w3-right w3-margin-right ">
            <button class="w3-button w3-xlarge w3-circle w3-theme-button w3-card-4"
            onclick="mostrarModal()">+</button>
        </div>
    </div>

    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
     
<!-- Ventana Emergente Para Añadir Usuario-->
    <div id="modal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <span onclick="cerrarModal()" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Cerrar Ventana">X</span>
                    <img src="<?php echo base_url('assets/img/add-user.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="post" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/enviar-form') ?>">
                <div class="w3-section w3-half">
                    <label><b>Nombres</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombres" type="text" placeholder="Ingresar Nombres">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Apellidos</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="apellidos" type="text" placeholder="Ingresar Apellidos">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Cedula</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="cedula" type="text" placeholder="Ingresar Cedula">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Fecha de nacimiento</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="fecha_nacimiento" type="text" placeholder="Ingresar Fecha de nacimiento">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Grupo sanguineo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="grupo_sanguineo" type="text" placeholder="Ingresar Grupo sanguíneo">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Ciudad de nacimiento</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="ciudad_nacimiento" type="date" placeholder="Ingresar Ciudad de nacimiento">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Telefono</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="telefono" type="text" placeholder="Ingresar Telefono">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Rango</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="id_rango_personal" type="number" placeholder="Ingresar Rango">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Dependencia</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="id_dependencia_personal" type="number" placeholder="Ingresar Dependencia">
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>


    <hr class="w3-border-theme">

    <div class="w3-responsive w3-container">
        <table class="w3-table w3-bordered w3-border w3-centered" id="table">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Fecha de Nacimiento</th>
                <th>Ciudad de Nacimiento</th>
                <th>Grupo Sanguíneo</th>
                <th>Teléfono</th>
                <th>Rango</th>
                <th>Dependencia</th>
                <th>Acciones</th>
            </tr>
            <?php if($personal): ?>
                <?php foreach($personal as $personals): ?>
            <tr>
                <td><?php echo $personals['nombres']; ?></td>
                <td><?php echo $personals['apellidos']; ?></td>
                <td><?php echo $personals['cedula']; ?></td>
                <td><?php echo $personals['fecha_nacimiento']; ?></td>
                <td><?php echo $personals['ciudad_nacimiento']; ?></td>
                <td><?php echo $personals['grupo_sanguineo']; ?></td>
                <td><?php echo $personals['telefono']; ?></td>
                <td><?php echo $personals['id_rango_personal']; ?></td>
                <td><?php echo $personals['id_dependencia_personal']; ?></td>
                <td><a href="<?php echo base_url('editar/'.$personals['id_personal']); ?>" 
                onclick="mostrarModal2()" class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar/'.$personals['id_personal']); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
    <?php echo $this->section('JS'); ?>
    <?php echo $this->endSection('JS');?>

    <?php echo $this->endSection('content');?>

