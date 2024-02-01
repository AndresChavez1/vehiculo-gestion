<?php echo $this->extend('layouts/plantilla-interna') ?>

<?php echo $this->section('content') ?>

<!-- Contenido de la Vista Denuncias -->

<div class="w3-row-padding">
        <div class="w3-container w3-third">
        </div>
        <div class="w3-container w3-col l1 w3-right w3-margin-right ">
            <button class="w3-button w3-xlarge w3-circle w3-theme-button w3-card-4"
            onclick="mostrarModal()">+</button>
        </div>
    </div>
     
<!-- Ventana Emergente Para Añadir Usuario-->
    <div id="modal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <span onclick="cerrarModal()" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Cerrar Ventana">X</span>
                    <img src="<?php echo base_url('assets/img/mantenimiento_vehicular.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="POST" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/denuncia-form') ?>">
                <div class="w3-section w3-row">
                    <label><b>Tipo de Denuncia</b></label>
                    <select name="tipo_denuncia" class="w3-select" required>
                        <option value="" disabled selected>Elegir Tipo de Denuncia</option>
                        <?php foreach($tipo_denuncia as $item): ?>
                            <option value="<?php echo $item->id_tipo_denuncia; ?>"><?php echo $item->nombre_tipo_denuncia; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>  
                <div class="w3-section w3-row">
                    <label><b>Subcircuito</b></label>
                    <select name="subcircuito" class="w3-select" required>
                        <option value=""disabled selected>Elegir Subcircuito</option>
                        <?php foreach($subcircuito as $item): ?>
                            <option value="<?php echo $item->id_subcircuito; ?>"><?php echo $item->nombre_subcircuito; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Nombres</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombres" type="text-box" placeholder="Ingresar Nombres" required>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Apellidos</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="apellidos" type="text-box" placeholder="Ingresar Apellidos" required>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Contacto</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="contacto" type="text-box" placeholder="Ingresar Contacto">
                </div>
                <div class="w3-section w3-row">
                    <label><b>Detalle</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="detalle" type="text-box" placeholder="Ingresar Detalle" required>
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>
                        </div>

    <hr class="w3-border-theme">

    <div class="w3-row">
    <h2 class="w3-margin w3-left">Tabla de Denuncias</h2>
    <td><button class="w3-button w3-small w3-round-large w3-theme-button w3-card-4 w3-right w3-margin-top w3-margin-right" id="reporte">
                    <b>Generar Reporte</b>
                </button></td>
    </div>

    
    <div class="w3-responsive w3-container">
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table">
            <thead>
            <tr>
                <th>Solicitud N°</th>
                <th>Fecha de inicio</th>
                <th>Fecha fin</th>
                <th>Tipo</th>
                <th>Detalle</th>
                <th>Circuito</th>
                <th>Subcircuito</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Contacto</th>
                <th>Agregar Fecha Fin</th>

            </tr>
            </thead>
            <tbody>
                <?php if($denuncia): ?>
                    <?php foreach ($denuncia as $row): ?>
            <tr>
                <td><?php echo $row->id_denuncia ?></td>
                <td><?php echo $row->fecha_inicio ?></td>
                <td><?php echo $row->fecha_fin ?></td>
                <td><?php echo $row->nombre_tipo_denuncia ?></td>
                <td><?php echo $row->detalle ?></td>
                <td><?php echo $row->nombre_subcircuito ?></td>
                <td><?php echo $row->nombre_circuito ?></td>
                <td><?php echo $row->nombres ?></td>
                <td><?php echo $row->apellidos ?></td>
                <td><?php echo $row->contacto ?></td>
                <td><a href="<?php echo base_url('editar-denuncia/'.$row->id_denuncia); ?>" 
                 class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>

            </tr>
            <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
    </div>

    <?php echo $this->section('JS'); ?>

<script>
$(document).ready(function() {
    $('#my_table').DataTable();
});

$('#reporte').on('click', function(e) {
    e.preventDefault();

    // Destruye la instancia actual de DataTables
    $('#my_table').DataTable().destroy();

    // Crea una nueva instancia de DataTables con los botones
    $('#my_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>

<?php echo $this->endSection(); ?>

<?php echo $this->endSection() ?>