<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content');?>

<!-- Contenido de la vista editar vehiculo-->

<div>
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <img src="<?php echo base_url('assets/img/add-user.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="post" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/actualizar-vehiculo') ?>">
                <div class="w3-section w3-half">    
                    <input type="hidden" name="id_vehiculo" id="id_vehiculo" value="<?php echo $vehiculo_obj['id_vehiculo']; ?>">
                    <label><b>tipo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="tipo" type="text" value="<?php echo $vehiculo_obj['tipo']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>placa</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="placa" type="text" value="<?php echo $vehiculo_obj['placa']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>chasis</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="chasis" type="text" value="<?php echo $vehiculo_obj['chasis']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>marca</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="marca" type="text" value="<?php echo $vehiculo_obj['marca']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Modelo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="modelo" type="text" value="<?php echo $vehiculo_obj['modelo']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>motor</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="motor" type="text" value="<?php echo $vehiculo_obj['motor']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>kilometraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="kilometraje" type="number" value="<?php echo $vehiculo_obj['kilometraje']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>cilindraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="cilindraje" type="number" value="<?php echo $vehiculo_obj['cilindraje']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>carga</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="carga" type="number" value="<?php echo $vehiculo_obj['carga']; ?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>pasajeros</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="pasajeros" type="number" value="<?php echo $vehiculo_obj['pasajeros']; ?>">
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>
<?php echo $this->endSection('content');?>
