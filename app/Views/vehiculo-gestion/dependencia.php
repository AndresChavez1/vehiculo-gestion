<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista Gestión Dependencia -->

<div class="w3-row-padding">
        <div class="w3-container w3-third">
        </div>
        <div class="w3-dropdown-hover w3-right">
            <button class="w3-button w3-xlarge w3-circle w3-theme-button w3-card-4">+</button>
            <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
             <a href="<?php echo base_url('provincia-form') ?>" class="w3-button w3-bar-item w3-hover-green">Provincia </a>
             <a href="<?php echo base_url('distrito-form') ?>" class="w3-button w3-bar-item w3-hover-red">Distrito </a>
             <a href="<?php echo base_url('parroquia-form') ?>" class="w3-button w3-bar-item w3-hover-blue">Parroquia </a>
             <a href="<?php echo base_url('circuito-form') ?>" class="w3-button w3-bar-item w3-hover-purple">Circuito </a>
             <a href="<?php echo base_url('subcircuito-form') ?>" class="w3-button w3-bar-item w3-hover-purple">Subcircuito </a>
            </div>
          </div>
        <!--<div class="w3-dropdown-hover w3-right">


             <button class="w3-button w3-theme-button">Añadir</button>
            <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
             <a href="" class="w3-button w3-bar-item w3-hover-green" >Dependencia</a>
             <a href="" class="w3-button w3-bar-item w3-hover-red">Provincia</a>
             <a href="" class="w3-button w3-bar-item w3-hover-blue">Distrito</a>
             <a href="" class="w3-button w3-bar-item w3-hover-purple">Circuito</a>
             <a href="" class="w3-button w3-bar-item w3-hover-aqua">Subcircuito</a>
            </div>
          </div>-->
    </div>



    <hr class="w3-border-theme">

    <div class="w3-responsive w3-container">
        <h1>Dependencia</h1>
        <table class="w3-table w3-bordered w3-border w3-centered" id="my_table">
            <thead>
            <tr>
                <th>Provincia</th>
                <th>N° Distritos</th>
                <th>Parroquia</th>
                <th>Código Distrito</th>
                <th>Nombre Distrito</th>
                <th>N° Circuitos</th>
                <th>Código Circuito</th>
                <th>Nombre Circuito</th>
                <th>N° Subcircuitos</th>
                <th>Código Subcircuito</th>
                <th>Nombre Subcircuito</th>
            </tr>
            </thead>
            <tbody>
                <?php if($dependencia): ?>
                <?php foreach($dependencia as $row): ?>
            <tr>
                <td><?php echo $row->nombre_provincia ?></td>
                <td><?php echo $row->numero_distritos; ?></td>
                <td><?php echo $row->nombre_parroquia; ?></td>
                <td><?php echo $row->codigo_distrito ?></td>
                <td><?php echo $row->nombre_distrito; ?></td>
                <td><?php echo $row->numero_circuitos; ?></td>
                <td><?php echo $row->codigo_circuito ?></td>
                <td><?php echo $row->nombre_circuito; ?></td>
                <td><?php echo $row->numero_subcircuitos; ?></td>
                <td><?php echo $row->codigo_subcircuito; ?></td>
                <td><?php echo $row->nombre_subcircuito; ?></td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="w3-responsive w3-container" style="margin-left: 30px; margin-right: 30px;">
        <h1>Provincia</h1>
        <table class="w3-table w3-bordered w3-border" id="my_second_table">
            <thead>
            <tr>
                <th>Provincia</th>
                <th>Número de Distritos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                <?php if($provincia): ?>
                <?php foreach($provincia as $row): ?>
            <tr>
                <td><?php echo $row->nombre_provincia ?></td>
                <td><?php echo $row->numero_distritos ?></td>
                <td><a href="<?php echo base_url('editar-provincia/'.$row->id_provincia); ?>" 
                 class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar-provincia/'.$row->id_provincia); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="w3-responsive w3-container" style="margin-left: 30px; margin-right: 30px;">
        <h1>Distrito</h1>
        <table class="w3-table w3-bordered w3-border" id="my_third_table">
            <thead>
            <tr>
                <th>Distrito</th>
                <th>Código de Distrito</th>
                <th>Número de Circuitos</th>
                <th>Provincia</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                <?php if($distrito): ?>
                <?php foreach($distrito as $row): ?>
            <tr>
                <td><?php echo $row->nombre_distrito ?></td>
                <td><?php echo $row->codigo_distrito; ?></td>
                <td><?php echo $row->numero_circuitos ?></td>
                <td><?php echo $row->nombre_provincia; ?></td>
                <td><a href="<?php echo base_url('editar-distrito/'.$row->id_distrito); ?>" 
                 class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar-distrito/'.$row->id_distrito); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="w3-responsive w3-container" style="margin-left: 30px; margin-right: 30px;">
        <h1>Parroquia</h1>
        <table class="w3-table w3-bordered w3-border" id="my_fourth_table">
            <thead>
            <tr>
                <th>Parroquia</th>
                <th>Distrito</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                <?php if($parroquia): ?>
                <?php foreach($parroquia as $row): ?>
            <tr>
                <td><?php echo $row->nombre_parroquia ?></td>
                <td><?php echo $row->nombre_distrito; ?></td>
                <td><a href="<?php echo base_url('editar-parroquia/'.$row->id_parroquia); ?>" 
                 class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar-parroquia/'.$row->id_parroquia); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="w3-responsive w3-container" style="margin-left: 30px; margin-right: 30px;">
        <h1>Circuito</h1>
        <table class="w3-table w3-bordered w3-border" id="my_fifth_table">
            <thead>
            <tr>
                <th>Circuito</th>
                <th>Código Circuito</th>
                <th>Numero de Subcircuitos</th>
                <th>Distrito</th>
                <th>Parroquia</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                <?php if($circuito): ?>
                <?php foreach($circuito as $row): ?>
            <tr>
                <td><?php echo $row->nombre_circuito ?></td>
                <td><?php echo $row->codigo_circuito; ?></td>
                <td><?php echo $row->numero_subcircuitos; ?></td>
                <td><?php echo $row->nombre_distrito; ?></td>
                <td><?php echo $row->nombre_parroquia; ?></td>
                <td><a href="<?php echo base_url('editar-circuito/'.$row->id_circuito); ?>" 
                 class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar-circuito/'.$row->id_circuito); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <div class="w3-responsive w3-container" style="margin-left: 30px; margin-right: 30px;">
        <h1>Subcircuito</h1>
        <table class="w3-table w3-bordered w3-border" id="my_sixth_table">
            <thead>
            <tr>
                <th>Subcircuito</th>
                <th>Código subcircuito</th>
                <th>Circuito</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                <?php if($subcircuito): ?>
                <?php foreach($subcircuito as $row): ?>
            <tr>
                <td><?php echo $row->nombre_subcircuito ?></td>
                <td><?php echo $row->codigo_subcircuito; ?></td>
                <td><?php echo $row->nombre_circuito; ?></td>
                <td><a href="<?php echo base_url('editar-subcircuito/'.$row->id_subcircuito); ?>" 
                 class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar-subcircuito/'.$row->id_subcircuito); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
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
  $(document).ready(function() {
    $('#my_second_table').DataTable();
  });
  $(document).ready(function() {
    $('#my_third_table').DataTable();
  });
  $(document).ready(function() {
    $('#my_fourth_table').DataTable();
  });
  $(document).ready(function() {
    $('#my_fifth_table').DataTable();
  });
  $(document).ready(function() {
    $('#my_sixth_table').DataTable();
  });
</script>
<?php echo $this->endSection(); ?>


    <?php echo $this->endSection(); ?>

