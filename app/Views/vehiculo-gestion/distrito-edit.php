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
            action="<?php echo base_url('/actualizar-distrito') ?>">
            <input type="hidden" name="_method" value="PUT">
            <div class="w3-section w3-row">
                <input type="hidden" name="id_distrito" id="id_distrito" value="<?php echo $distrito_obj['id_distrito']; ?>">
                    <label><b>Distrito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombre_distrito" type="text" value="<?php echo $distrito_obj['nombre_distrito']; ?>">   
                </div>
                <div class="w3-section w3-row">
                    <label><b>Código de Distrito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="codigo_distrito" type="text" value="<?php echo $distrito_obj['codigo_distrito']; ?>">   
                </div>
                <select name="provincia" class="w3-select">
                            <option value="<?php echo $distrito_obj['provincia']; ?>"><?php echo $distrito_obj['nombre_provincia']; ?></option>
                            <?php foreach ($provincia_obj as $item): ?>
                                <option value="<?php echo $item->id_provincia; ?>"><?php echo $item->nombre_provincia; ?></option>
                            <?php endforeach; ?>
                        </select>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>

<?php echo $this->endSection(); ?>