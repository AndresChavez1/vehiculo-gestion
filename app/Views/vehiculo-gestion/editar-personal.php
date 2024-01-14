<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

 <!-- Ventana Emergente Para Editar Usuario-->
 <div>
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <img src="<?php echo base_url('assets/img/add-user.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="post" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/actualizar') ?>">
                <div class="w3-section w3-half">    
                    <input type="hidden" name="id_personal" id="id_personal" value="<?php echo $personal_obj['id_personal']; ?>">
                    <label><b>Nombres</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombres" type="text" value="<?php echo $personal_obj['nombres']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Apellidos</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="apellidos" type="text" value="<?php echo $personal_obj['apellidos']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Cedula</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="cedula" type="text" value="<?php echo $personal_obj['cedula']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Fecha de nacimiento</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="fecha_nacimiento" type="date" value="<?php echo $personal_obj['fecha_nacimiento']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Grupo sanguineo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="grupo_sanguineo" type="text" value="<?php echo $personal_obj['grupo_sanguineo']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Ciudad de nacimiento</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="ciudad_nacimiento" type="text" value="<?php echo $personal_obj['ciudad_nacimiento']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Telefono</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="telefono" type="text" value="<?php echo $personal_obj['telefono']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Rango</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="id_rango_personal" type="number" value="<?php echo $personal_obj['id_rango_personal']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Dependencia</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="id_dependencia_personal" type="number" value="<?php echo $personal_obj['id_dependencia_personal']; ?>">
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>
    <?php echo $this->endSection('content'); ?>
