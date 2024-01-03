<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<div class="w3-row-padding">
        <div class="w3-container w3-third">
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Buscar" id="input" onkeyup="search()">
        </div>
        <div class="w3-container w3-col l1 w3-right w3-margin-right ">
            <button class="w3-button w3-xlarge w3-circle w3-theme-button w3-card-4"
            onclick="document.getElementById('modal').style.display='block';">+</button>
        </div>
    </div>

    <div id="modal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-theme" style="max-width: 600px;">
                <div class="w3-center">
                    <br>
                    <span onclick="document.getElementById('modal').style.display='none';" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Cerrar Ventana">X</span>
                    <img src="<?php echo base_url('assets/img/add-car.svg') ?>" alt="User Icon" class=" w3-margin-top svg" >
                </div>
                
            <form method="post" class="w3-container w3-row-padding" action="<?php echo base_url('/guardar-form') ?>">
                <div class="w3-section w3-half">
                    <!--<label><b>Tipo</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="tipo" type="text" placeholder="Ingresar Tipo de Vehiculo"> -->
                    <select name="tipo" id="" class="w3-select w3-border w3-margin-bottom w3-margin-top">
                        <option value="" disabled selected>Elije el tipo de Vehiculo</option>
                        <option value="1">Moto</option>
                        <option value="2">Auto</option>
                        <option value="3">Camión</option>
                    </select>
                </div>
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
                    name="kilometraje" type="number" placeholder="Ingresar Kilometraje">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Cilindraje</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="cilindraje" type="number" placeholder="Ingresar Cilindraje">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Carga</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="carga" type="number" placeholder="Ingresar Carga">
                </div>
                <div class="w3-section w3-half">
                    <label><b>Pasajeros</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" 
                    name="pasajeros" type="number" placeholder="Ingresar Pasajeros">
                </div>
                <button class="w3-button w3-block w3-section w3-padding w3-theme-button">Guardar</button>
            </form>
        </div>
    </div>

    <hr class="w3-border-theme">

    <div class="w3-responsive w3-container">
        <table class="w3-table w3-bordered w3-border w3-centered" id="table">
            <tr>
                <th>Tipo de Vehículo</th>
                <th>Placa</th>
                <th>Chasis</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th>Kilometraje</th>
                <th>Cilindraje</th>
                <th>Carga</th>
                <th>Pasajeros</th>
                <th>Acciones</th>
            </tr>
            <?php if($vehiculo): ?>
                <?php foreach($vehiculo as $vehiculos): ?>
            <tr>
                <td><?php echo $vehiculos['tipo']; ?></td>
                <td><?php echo $vehiculos['placa']; ?></td>
                <td><?php echo $vehiculos['chasis']; ?></td>
                <td><?php echo $vehiculos['marca']; ?></td>
                <td><?php echo $vehiculos['modelo']; ?></td>
                <td><?php echo $vehiculos['motor']; ?></td>
                <td><?php echo $vehiculos['kilometraje']; ?></td>
                <td><?php echo $vehiculos['cilindraje']; ?></td>
                <td><?php echo $vehiculos['carga']; ?></td>
                <td><?php echo $vehiculos['pasajeros']; ?></td>
                <td><a href="<?php echo base_url('editar/'.$vehiculos['id_vehiculo']); ?>" 
                onclick="mostrarModal2()" class="w3-button w3-small w3-round-large w3-theme-button w3-card-4">
                <i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="<?php echo base_url('eliminar/'.$vehiculos['id_vehiculo']); ?>" class="w3-button w3-small w3-round-large w3-red w3-card-4">
                <i class="fa-solid fa-x"></i></a></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

<?php echo $this->section('JS'); ?>

<?php echo $this->endSection('JS'); ?>

<?php echo $this->endSection('content'); ?>