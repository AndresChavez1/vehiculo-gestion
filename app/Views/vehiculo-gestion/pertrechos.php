<?php echo $this->extend('layouts/plantilla-interna') ?>

<?php echo $this->section('content') ?>

<!-- Contenido de la Vista de Pertrechos -->

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
                    <img src="<?php echo base_url('assets/img/pertrecho.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="POST" class="w3-container w3-row-padding" 
            action="<?php echo base_url('/pertrecho-form') ?>">
                <div class="w3-section w3-half">
                    <label><b>Tipo de Arma</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="tipo_arma" type="text" placeholder="Ingresar Tipo de arma">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Nombre</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="nombre" type="text" placeholder="Ingresar Nombre">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Descripción</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="descripcion" type="text" placeholder="Ingresar Descripción">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Código</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="codigo" type="text" placeholder="Ingresar Código">
                </div>
                <div class="w3-section w3-row">
                    <label><b>Personal</b></label>
                    <select name="personal" class="w3-select">
                        <option value=""></option>
                        <?php foreach ($personal as $item): ?>
                            <option value="<?php echo $item->id_personal ?>"><?php echo $item->nombres. ' '. $item->apellidos ?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <button type="submit" class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>


    <hr class="w3-border-theme">

    <?php if (session()->get('rol') != 2): ?>

    <h1 class="w3-center">Gestión del armamento</h1>

    <button class="w3-button w3-block w3-theme-button w3-large acordeon w3-round-large"
    onclick="myFunction('Demo1')">Mostrar/Ocultar Gestión del Armamento</button>

<div id="Demo1" class="w3-responsive w3-container w3-hide w3-animate-zoom">
<form action="<?php echo base_url('pertrecho-sub') ?>"
      method="post">
      <input type="hidden" name="_method" value="PUT">
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table">
            <thead>
            <tr>
            <th><button type="submit" class="w3-button w3-theme-button" name="updatePersBtn">Asignar</button></th>
                <th>Cédula</th>
                <th>Personal</th>
                <th>Rango</th>
                <th>Distrito</th>
                <th>Tipo de arma</th>
                <th>Descripción</th>
                <th>Código</th>
                <th>Fecha de registro</th>
                <th>Hora de registro</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <?php if($pertrechos): ?>
            <?php foreach ($pertrechos as $row): ?>
            <tr>
            <td><input type="checkbox" class="w3-check" name="id_pertrecho[]" value="<?php echo $row->id_pertrecho ?>"></td>
                <td><?php echo $row->cedula;?></td>
                <td><?php echo $row->nombres. ' '. $row->apellidos;?></td>
                <td><?php echo $row->nombre_rango;?></td>
                <td><?php echo $row->nombre_subcircuito;?></td>
                <td><input class="w3-input" name="tipo_arma[<?php echo $row->id_pertrecho;?>]" type="text" value="<?php echo $row->tipo_arma;?>"></td>
                <td><input class="w3-input" name="descripcion[<?php echo $row->id_pertrecho;?>]" type="text" value="<?php echo $row->descripcion;?>"></td>
                <td><input class="w3-input" name="codigo[<?php echo $row->id_pertrecho;?>]" type="text" value="<?php echo $row->codigo;?>"></td>
                <td><?php echo $row->fecha_registro;?></td>
                <td><?php echo $row->hora_registro;?></td>
                <td><a href="<?php echo base_url('eliminar-pertrecho/'.$row->id_pertrecho); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </form>
    </div>

    <h1 class="w3-center">Armamento registrado por Zonas:</h1>
    <button class="w3-button w3-block w3-theme-button w3-large acordeon w3-round-large"
    onclick="myFunction('Demo2')">Mostrar/Ocultar Armamento</button>
    <div id="Demo2" class="w3-responsive w3-container w3-hide w3-animate-zoom">
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table2">
            <thead>
            <tr>
                <th>ID</th>
                <th>Rastrillo</th>
                <th>Tipo de arma</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Código</th>
            </tr>
            </thead>
            <tbody>
            <?php if($pertrechos): ?>
            <?php foreach ($pertrechos as $row): ?>
            <tr>
                <td><?php echo $row->id_pertrecho;?></td>
                <td><?php echo $row->nombre_subcircuito;?></td>
                <td><?php echo $row->tipo_arma;?></td>
                <td><?php echo $row->nombre;?></td>
                <td><?php echo $row->descripcion;?></td>
                <td><?php echo $row->codigo;  ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </form>
    </div>

    <?php else: ?>

    <h1 class="w3-center">Detalles del armamento</h1>

<div class="w3-responsive w3-container">
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table2">
            <thead>
            <tr>
                <th>Cédula</th>
                <th>Personal</th>
                <th>Rango</th>
                <th>Distrito</th>
                <th>Tipo de arma</th>
                <th>Descripción</th>
                <th>Código</th>
                <th>Fecha de registro</th>
                <th>Hora de registro</th>
            </tr>
            </thead>
            <tbody>
            <?php if($pertrechos): ?>
            <?php foreach ($pertrechos as $row): ?>
            <tr>
                <td><?php echo $row->cedula;?></td>
                <td><?php echo $row->nombres. ' '. $row->apellidos;?></td>
                <td><?php echo $row->nombre_rango;?></td>
                <td><?php echo $row->nombre_subcircuito;?></td>
                <td><?php echo $row->tipo_arma;  ?></td>
                <td><?php echo $row->descripcion;  ?></td>
                <td><?php echo $row->codigo;  ?></td>
                <td><?php echo $row->fecha_registro;?></td>
                <td><?php echo $row->hora_registro;?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </form>
    </div>

    <?php endif; ?>




<script>
    $(document).ready(function() {
    $('#my_table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
},
$(document).ready(function() {
    $('#my_table2').DataTable();
} )
);
</script>

<?php echo $this->section('JS'); ?>

<?php echo $this->endSection(); ?>

<?php echo $this->endSection('content'); ?>
