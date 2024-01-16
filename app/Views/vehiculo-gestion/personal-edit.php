<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

 <!-- Ventana Emergente Para Editar Usuario-->
 <div>
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <img src="<?php echo base_url('assets/img/add-user.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="POST" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/actualizar-personal') ?>">
            <input type="hidden" name="_method" value="PUT">
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
                    name="cedula" type="number" value="<?php echo $personal_obj['cedula']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Fecha de nacimiento</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="fecha_nacimiento" type="date" value="<?php echo $personal_obj['fecha_nacimiento']; ?>">
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
                <div class="w3-section w3-row">
                    <label><b>Grupo Sanguineo</b></label>
                        <select name="tipo_sangre" class="w3-select">
                            <option value="<?php echo $personal_obj['tipo_sangre']; ?>"><?php echo $personal_obj['tipo_sangre']; ?></option>
                            <?php foreach ($tipo_sangre_obj as $item): ?>
                                <option value="<?php echo $item->id_tipo_sangre; ?>"><?php echo $item->nombre_tipo_sangre; ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Rango</b></label>
                    <select name="rango" class="w3-select">
                        <option value="<?php echo $personal_obj['rango']; ?>"><?php echo $personal_obj['rango']; ?></option>
                        <?php foreach ($rango_obj as $item): ?>
                            <option value="<?php echo $item->id_rango; ?>"><?php echo $item->nombre_rango; ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Subcircuito</b></label>
                    <select name="subcircuito" class="w3-select">
                        <option value="<?php echo $personal_obj['subcircuito']; ?>"><?php echo $personal_obj['subcircuito']; ?></option>
                        <?php foreach ($subcircuito_obj as $item): ?>
                            <option value="<?php echo $item->id_subcircuito; ?>"><?php echo $item->nombre_subcircuito; ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Vehiculo</b></label>
                    <select name="vehiculo" class="w3-select">
                        <option value="<?php echo $personal_obj['vehiculo']; ?>"><?php echo $personal_obj['vehiculo']; ?></option>
                        <?php foreach ($vehiculo_obj as $item): ?>
                            <option value="<?php echo $item->id_vehiculo; ?>"><?php echo $item->placa; ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Rol</b></label>
                    <select name="rol" class="w3-select">
                        <option value="<?php echo $personal_obj['rol']; ?>"><?php echo $personal_obj['rol']; ?></option>
                        <?php foreach ($rol_obj as $item): ?>
                            <option value="<?php echo $item->id_rol; ?>"><?php echo $item->nombre_rol; ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>
    <?php echo $this->endSection('content'); ?>
