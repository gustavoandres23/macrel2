<li class="divider"></li>
<h4 class="center orange-text light">Editar material de inventario</h4>
<li class="divider"></li>


<?php echo form_open('ctl_inventario/updMaterial/'.$id); ?>


<div class="row">

  <div class="input-field col s12">
      <input id="nombre_material" value="<?echo $nombre_material?>" name="nombre_material" type="text" class="validate">
      <label for="nombre_material">Material:</label>
  </div>

  <div class="input-field col s12">
      <input id="unidad_medida" value="<?echo $unidad_medida?>" name="unidad_medida" type="text" class="validate">
      <label for="unidad_medida">Unidad de medida:</label>
  </div>

  <div class="input-field col s12">
      <input id="cantidad" value="<?echo $cantidad?>" name="cantidad" type="number" class="validate">
      <label for="cantidad">Cantidad:</label>
  </div>

  <div class="input-field col s12">
      <input id="ubicacion" value="<?echo $ubicacion?>" name="ubicacion" type="text" class="validate">
      <label for="ubicacion">Ubicacion:</label>
  </div>

  <button class="btn-large waves-effect waves-light" type="submit" name="action">Modificar material
    <i class="material-icons right">add</i>
  </button>

  </div>

  <?php echo form_close(); ?>
