<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista Gestión Dependencia -->

<div class="w3-row-padding">
        <div class="w3-container w3-third">
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Buscar" id="input" onkeyup="search()">
        </div>
        <div class="w3-container w3-col l1 w3-right w3-margin-right ">
            <button class="w3-button w3-xlarge w3-circle w3-theme-button w3-card-4"
            onclick="mostrarModal()">+</button>
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

    <div id="modal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <span onclick="document.getElementById('modal').style.display='none';" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Cerrar Ventana">X</span>
                    <img src="<?php echo base_url('assets/img/add-dep.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form class="w3-container w3-row-padding" action="<?php echo base_url('dependencia-general') ?>" 
            method="post">
            <div class="w3-section w3-row">
                    <label><b>Dependencia</b></label>
                    <select name="dependencia" id="" class="w3-select">
                        <option value="" disabled selected>Seleccionar Dependencia</option>
                        <?php foreach($dependencia as $item): ?>
                        <option value="<?php echo $item->id_dependencia; ?>"  ><?php echo $item->nombre_dependencia; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Parroquia</b></label>
                    <select name="parroquia" id="" class="w3-select">
                        <option value="" disabled selected>Seleccionar Parroquia</option>
                        <?php foreach($parroquia as $item): ?>
                        <option value="<?php echo $item->id_parroquia; ?>"  ><?php echo $item->nombre_parroquia; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Distrito</b></label>
                    <select name="distrito" id="" class="w3-select">
                        <option value="" disabled selected>Seleccionar Distrito</option>
                        <?php foreach($distrito as $item): ?>
                        <option value="<?php echo $item->id_distrito; ?>"  ><?php echo $item->nombre_distrito; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Circuito</b></label>
                    <select name="circuito" id="" class="w3-select">
                        <option value="" disabled selected>Seleccionar Circuito</option>
                        <?php foreach($circuito as $item): ?>
                        <option value="<?php echo $item->id_circuito; ?>"  ><?php echo $item->nombre_circuito; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w3-section w3-row">
                    <label><b>Subcircuito</b></label>
                    <select name="subcircuito" id="" class="w3-select">
                        <option value="" disabled selected>Seleccionar Subcircuito</option>
                        <?php foreach($subcircuito as $item): ?>
                        <option value="<?php echo $item->id_subcircuito; ?>"  ><?php echo $item->nombre_subcircuito; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w3-section w3-half">
                    <label><b>Código de Distrito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" name="codigo_distrito" type="text" placeholder="Ingresar Código de Distrito">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Código Circuito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" name="codigo_circuito" type="text" placeholder="Ingresar Código Circuito">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Código Subcircuito</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" name="codigo_subcircuito" type="text" placeholder="Ingresar Código Subcircuito">
                </div>
                <button class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>


    <hr class="w3-border-theme">

    <div class="w3-responsive w3-container">
        <h1>Dependencia</h1>
        <table class="w3-table w3-bordered w3-border w3-centered" id="table">
            <tr>
                <th>Dependencia</th>
                <th>N° Distritos</th>
                <th>Parroquia   </th>
                <th>Código Distrito</th>
                <th>Nombre Distrito</th>
                <th>N° Circuitos</th>
                <th>Código Circuito</th>
                <th>Nombre Circuito</th>
                <th>N° Subcircuitos</th>
                <th>Código Subcircuito</th>
                <th>Nombre Subcircuito</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
                <?php if($dependencia): ?>
                <?php foreach($dependencia as $row): ?>
            <tr>
                <td><?php echo $row->nombre_dependencia ?></td>
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
                <td><button class="w3-button w3-small w3-round-large w3-theme-button w3-card-4"><i class="fa-solid fa-pen-to-square"></i></button></td>
                <td><button class="w3-button w3-small w3-round-large w3-red w3-card-4"><i class="fa-solid fa-x"></i></button></td>
            </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

<?php echo $this->endSection('content'); ?>

<?php echo $this->section('JS'); ?>
    <?php echo $this->endSection('JS'); ?>

