<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista Editar Vehiculo -->

<div>
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <img src="<?php echo base_url('assets/img/add-car.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="POST" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/actualizar-vehiculo') ?>">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id_vehiculo" id="id_vehiculo" value="<?php echo $vehiculo_obj['id_vehiculo']; ?>">
                <div class="w3-section w3-half">
                    <label><b>Placa</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="placa" type="text" placeholder="Ingresar Placa" value="<?php echo $vehiculo_obj['placa'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Chasis</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="chasis" type="text" placeholder="Ingresar Chasis" value="<?php echo $vehiculo_obj['chasis'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Marca</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="marca" type="text" placeholder="Ingresar Marca" value="<?php echo $vehiculo_obj['marca'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Modelo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="modelo" type="text" placeholder="Ingresar Modelo" value="<?php echo $vehiculo_obj['modelo'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Motor</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="motor" type="text" placeholder="Ingresar Motor" value="<?php echo $vehiculo_obj['motor'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Kilometraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="kilometraje" type="text" placeholder="Ingresar Kilometraje" value="<?php echo $vehiculo_obj['kilometraje'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Cilindraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="cilindraje" type="number  " placeholder="Ingresar Cilindraje" value="<?php echo $vehiculo_obj['cilindraje'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Carga</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="carga" type="text" placeholder="Ingresar Carga" value="<?php echo $vehiculo_obj['carga'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>subcircuito</b></label>
                    <select name="subcircuito" class="w3-select">
                        <option value="<?php echo $vehiculo_obj['subcircuito']; ?>"><?php echo $vehiculo_obj['subcircuito']; ?></option>
                        <?php foreach ($subcircuito_obj as $item): ?>
                            <option value="<?php echo $item->id_subcircuito; ?>"><?php echo $item->nombre_subcircuito; ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="w3-section w3-half">
                    <label><b>Pasajeros</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="pasajeros" type="text" placeholder="Ingresar Pasajeros" value="<?php echo $vehiculo_obj['pasajeros'];?>">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Tipo de Vehiculo</b></label>
                    <select name="tipo" class="w3-select">
                        <option value="<?php echo $vehiculo_obj['tipo'];?> "><?php echo $vehiculo_obj['tipo'];?></option>
                        <?php foreach ($tipo_vehiculo_obj as $item): ?>
                            <option value="<?php echo $item->id_tipo_vehiculo ?>"><?php echo $item->nombre_tipo ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>

<?php echo $this->endSection('content'); ?>