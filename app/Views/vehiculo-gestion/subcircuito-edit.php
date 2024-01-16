<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista Editar Provincia -->

<div>
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <img src="<?php echo base_url('assets/img/add-dep.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="post" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/actualizar-subcircuito') ?>">
            <input type="hidden" name="_method" value="PUT">
            <div class="w3-section w3-row">
                <input type="hidden" name="id_subcircuito" id="id_subcircuito" value="<?php echo $subcircuito_obj['id_subcircuito']; ?>">
                    <label><b>Subcircuito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombre_subcircuito" type="text" value="<?php echo $subcircuito_obj['nombre_subcircuito']; ?>">   
                </div>
                <div class="w3-section w3-row">
                    <label><b>Código de Subcircuito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="codigo_subcircuito" type="text" value="<?php echo $subcircuito_obj['codigo_subcircuito']; ?>">   
                </div>
                <div class="w3-section w3-row">
                <label><b>Circuito</b></label>
                    <select name="circuito" class="w3-select">
                        <option value="<?php echo $subcircuito_obj['circuito']; ?>"><?php echo $subcircuito_obj['nombre_circuito']; ?></option>
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