<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista de Mantenimiento Vehicular -->

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
            action="<?php echo base_url('/mantenimiento-form') ?>">
                <div class="w3-section w3-row">
                    <label><b>Tipo de Mantenimiento</b></label>
                    <select name="tipo_mantenimiento" class="w3-select">
                        <option value=""></option>
                        <?php foreach($tipo_mantenimiento as $item): ?>
                            <option value="<?php echo $item->id_tipo_mantenimiento; ?>"><?php echo $item->nombre_mantenimiento; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>  
                <div class="w3-section w3-row">
                    <label><b>Vehiculo</b></label>
                    <select name="vehiculo" class="w3-select">
                        <option value=""></option>
                        <?php foreach($vehiculo as $item): ?>
                            <option value="<?php echo $item->id_vehiculo; ?>"><?php echo $item->placa; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Personal</b></label>
                    <select name="personal" class="w3-select">
                        <option value=""></option>
                        <?php foreach($personal as $item): ?>
                            <option value="<?php echo $item->id_personal; ?>"><?php echo $item->nombres.' '. $item->apellidos; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="w3-section w3-half">
                    <label><b>Asunto:</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="asunto" type="text" placeholder="Ingresar Asunto:">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Fecha de Ingreso:</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="fecha_ingreso" type="date" placeholder="Ingresar Fecha de Ingreso">
                </div>
                <div class="w3-section w3-row">
                    <label><b>Detalle</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="detalle" type="text-box" placeholder="Ingresar detalle">
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>
                        </div>

    <hr class="w3-border-theme">

    <div class="w3-responsive w3-container">
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table">
            <thead>
            <tr>
                <th>Solicitud N°</th>
                <th>Fecha y hora de ingreso</th>
                <th>Kilometraje</th>
                <th>Tipo de Vehiculo</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Solicitante</th>
                <th>Cédula</th>
                <th>Asunto</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <?php if($mantenimiento): ?>
            <?php foreach ($mantenimiento as $row): ?>
            <tr>
                <td><?php echo $row->id_mantenimiento; ?></td>
                <td><?php echo $row->fecha_ingreso ?></td>
                <td><?php echo $row->kilometraje;?></td>
                <td><?php echo $row->nombre_tipo;?></td>
                <td><?php echo $row->placa;?></td>
                <td><?php echo $row->marca;?></td>
                <td><?php echo $row->modelo;?></td>
                <td><?php echo $row->nombres. ' ' .$row->apellidos;;?></td>
                <td><?php echo $row->cedula;?></td>
                <td><?php echo $row->asunto; ?></td>
                <td><?php echo $row->detalle;?></td>
                <td><a href="<?php echo base_url('eliminar-mantenimiento/'.$row->id_mantenimiento); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $this->section('JS'); ?>

<script>
    $(document).ready(function() {
    $('#my_table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

<?php echo $this->endSection(); ?>
<?php echo $this->endSection(); ?>