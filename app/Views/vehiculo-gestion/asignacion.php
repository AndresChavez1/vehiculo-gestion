<?php echo $this->extend('layouts/plantilla-interna'); ?>

<?php echo $this->section('content'); ?>

<!-- Contenido de la vista Asignación de Recursos -->

<div class="w3-container w3-center">
    <h2>Tabla con Acordéon</h2>
    <button class="w3-button w3-block w3-theme-button w3-large"
    onclick="myFunction('Demo1')">Mostrar/Ocultar Asignación de Usuarios</button>
    <div id="Demo1" class="w3-container w3-hide w3-animate-zoom">
      <form action="<?php echo base_url('personal-sub') ?>"
      method="post">
      <input type="hidden" name="_method" value="PUT">
      <table class="w3-table w3-bordered w3-centered">
        <thead>
          <tr>
            <th><button type="submit" class="w3-button w3-theme-button" name="updatePersBtn">Asignar</button></th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Subcircuito</th>
          </tr>
        </thead>
        <tbody>
            <?php if($personal): ?>
            <?php foreach ($personal as $row):  ?>
          <tr>
            <td><input type="checkbox" class="w3-check" name="id_personal[]" value="<?php echo $row->id_personal ?>"></td>
            <td><?php echo $row->nombres ?></td>
            <td><?php echo $row->apellidos ?></td>
            <td><select name="subcircuito[<?php echo $row->id_personal ?>]">
                <?php foreach($subcircuito as $sub): ?>  
                  <option value="<?php echo $sub['id_subcircuito'] ?>" 
                    <?php echo $sub['id_subcircuito'] == $row->subcircuito ? 'selected': '' ?>>
                    <?php echo $sub['nombre_subcircuito'] ?>
                  </option>
                <?php endforeach ?>
            </select></td>
          </tr>
          <?php endforeach ?>
          <?php endif ?>
        </tbody>
      </table>
      </form>
    </div>
    <br>
    <button class="w3-button w3-block w3-theme-button w3-large"
    onclick="myFunction('Demo2')">Mostrar/Ocultar Asignación de Vehículos</button>
    <div id="Demo2" class="w3-container w3-hide w3-animate-zoom">
      <form action="<?php echo base_url('vehiculo-sub') ?>" method="post">
      <input type="hidden" name="_method" value="PUT">
        <table class="w3-table w3-bordered w3-centered">
          <thead>
            <tr>
              <th><button type="submit" class="w3-button w3-theme-button">Asignar</button></th>
              <th>Placa</th>
              <th>Marca</th>
              <th>Subcircuito</th>
            </tr>
          </thead>
          <tbody>
            <?php if($vehiculo): ?>
            <?php foreach ($vehiculo as $row):  ?>
            <tr>
              <td><input type="checkbox" class="w3-check" name="id_vehiculo[]" value="<?php echo $row->id_vehiculo ?>"></td>
              <td><?php echo $row->placa ?></td>
              <td><?php echo $row->marca ?></td>
              <td><select name="subcircuito[<?php echo $row->id_vehiculo ?>]">
                <?php foreach($subcircuito as $sub): ?>  
                  <option value="<?php echo $sub['id_subcircuito'] ?>" 
                    <?php echo $sub['id_subcircuito'] == $row->subcircuito ? 'selected': '' ?>>
                    <?php echo $sub['nombre_subcircuito'] ?>
                  </option>
                <?php endforeach ?>
            </select></td>            </tr>
            <?php endforeach ?>
            <?php endif ?>
          </tbody>
        </table>
        </form>
      </div>
  </div>
  <?php echo $this->section('JS') ?>
  <?php echo $this->endSection('JS') ?>

<?php echo $this->endSection(); ?>

