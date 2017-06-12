<li class="divider"></li>
<h4 class="center orange-text light">Editar trabajador</h4>
<li class="divider"></li>


<?php echo form_open(''); ?>


<div class="row">

  <div class="input-field col s12">
      <input id="rut" value="<?echo $rut?>" name="rut" type="text" class="validate">
      <label for="rut">Rut:</label>
  </div>

  <div class="input-field col s12">
      <input id="nombre" value="<?echo $nombre?>" name="nombre" type="text" class="validate">
      <label for="nombre">Nombre:</label>
  </div>

  <div class="input-field col s12">
      <input id="apellidos" value="<?echo $apellidos?>" name="apellidos" type="text" class="validate">
      <label for="apellidos">Apellidos:</label>
  </div>

  <div class="input-field col s12">
      <input id="valor_hora" value="<?echo $valor_hora?>" name="valor_hora" type="text" class="validate">
      <label for="valor_hora">Valor hora:</label>
  </div>

  <div class="input-field col s12">
      <input id="detalle" value="<?echo $detalle?>" name="detalle" type="text" class="validate">
      <label for="detalle">Detalle:</label>
  </div>

  <button class="btn-large waves-effect waves-light" type="submit" name="action">Modificar material
    <i class="material-icons right">add</i>
  </button>

  </div>

  <?php echo form_close(); ?>
