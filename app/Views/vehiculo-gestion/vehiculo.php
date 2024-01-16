<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista Gestión Vehicular -->

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
                    <img src="<?php echo base_url('assets/img/add-car.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="POST" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/vehiculo-form') ?>">
                <div class="w3-section w3-half">
                    <label><b>Placa</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="placa" type="text" placeholder="Ingresar Placa">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Chasis</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="chasis" type="text" placeholder="Ingresar Chasis">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Marca</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="marca" type="text" placeholder="Ingresar Marca">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Modelo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="modelo" type="text" placeholder="Ingresar Modelo">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Motor</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="motor" type="text" placeholder="Ingresar Motor">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Kilometraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="kilometraje" type="text" placeholder="Ingresar Kilometraje">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Cilindraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="cilindraje" type="number" placeholder="Ingresar Cilindraje">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Carga</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="carga" type="text" placeholder="Ingresar Carga">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Subcircuito</b></label>
                    <select name="subcircuito" class="w3-select">
                        <option value=""></option>
                        <?php foreach ($subcircuito as $item): ?>
                            <option value="<?php echo $item->id_subcircuito ?>"><?php echo $item->nombre_subcircuito ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="w3-section w3-half">
                    <label><b>Pasajeros</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="pasajeros" type="text" placeholder="Ingresar Pasajeros">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Tipo de Vehiculo</b></label>
                    <select name="tipo" class="w3-select">
                        <option value=""></option>
                        <?php foreach ($tipo_vehiculo as $item): ?>
                            <option value="<?php echo $item->id_tipo_vehiculo ?>"><?php echo $item->nombre_tipo ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>


    <hr class="w3-border-theme">

    <div class="w3-responsive w3-container">
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table">
            <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Chasis</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th>Kilometraje</th>
                <th>Cilindraje</th>
                <th>Carga</th>
                <th>Pasajeros</th>
                <th>Subcircuito</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <?php if($vehiculo): ?>
            <?php foreach ($vehiculo as $row): ?>
            <tr>
                <td><?php echo $row->placa;?></td>
                <td><?php echo $row->nombre_tipo;?></td>
                <td><?php echo $row->chasis;?></td>
                <td><?php echo $row->marca;?></td>
                <td><?php echo $row->modelo;?></td>
                <td><?php echo $row->motor;?></td>
                <td><?php echo $row->kilometraje;?></td>
                <td><?php echo $row->cilindraje; ?></td>
                <td><?php echo $row->carga;?></td>
                <td><?php echo $row->pasajeros;?></td>
                <td><?php echo $row->nombre_subcircuito;?></td>
                <td><a href="<?php echo base_url('editar-vehiculo/'.$row->id_vehiculo); ?>" 
                onclick="mostrarModal2()" class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar-vehiculo/'.$row->id_vehiculo); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
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