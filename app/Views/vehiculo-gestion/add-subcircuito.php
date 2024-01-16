<?php echo $this->extend('layouts/plantilla-interna') ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista añadir Provincia-->

<div>
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <img src="<?php echo base_url('assets/img/add-dep.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="post" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/subcircuito-add') ?>">
            <div class="w3-section w3-row">
                    <label><b>Subcircuito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombre_subcircuito" type="text" placeholder="Ingresar Subcircuito">   
            </div>
            <div class="w3-section w3-row">
                    <label><b>Codigo de Subcircuito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="codigo_subcircuito" type="text" placeholder="Ingresar Codigo de Subcircuito">   
            </div>
            <div class="w3-section w3-row">
                    <label><b>Circuito</b></label>
                    <select name="circuito" class="w3-select">
                        <option value="" selected disabled>Elegir Circuito</option>
                            <?php foreach ($circuito_obj as $item): ?>
                                <option value="<?php echo $item->id_circuito; ?>"><?php echo $item->nombre_circuito; ?></option>
                            <?php endforeach; ?>
                        </select>   
            </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>

<?php echo $this->endSection(); ?>