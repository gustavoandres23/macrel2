<div class="col 12">


<ul>


<h4 class="center light orange-text">Ingresar nuevo proyecto</h4>
<li class="divider"></li>
<br>
</ul>
</div>

<div class="row">

  <div class="row center">
    <div class="light red-text">
  <?php echo validation_errors(); ?>
    </div>

  <?php echo form_open('ctl_proy/addproy'); ?>


  <div class="input-field col s12">
      <input id="nombre_proyecto" name="nombre_proyecto" type="text" class="validate">
      <label for="nombre_proyecto">Nombre Proyecto</label>
  </div>

  <div class="input-field col s6">
      <input id="ubicacion" name="ubicacion" type="text" class="validate">
      <label for="ubicacion">Ubicación</label>
  </div>

  <div class="input-field col s6">
      <input id="utilidad" name="utilidad" type="text" class="validate">
      <label for="utilidad">Utilidad</label>
  </div>

  <div class="input-field col s6">
      <select class="browser-default" name="rut_cliente">
        <option value="" disabled selected>Seleccione Cliente</option>
    <?php
    foreach($clientes->result() as $cliente)
    {
        ?>
        <option value="<?=$cliente->Rut;?>"><? echo $cliente->Nombre;?></option>
        <?php
    }
    ?>
    </select>
    <p class="light">¿Cliente no aparece en lista?</p>
    <a class="left light waves-effect waves-yellow btn-flat" href="<? echo base_url();?>ctl_clientes/addcliente">agregar nuevo cliente</a>
  </div>

  <button class="btn-large waves-effect waves-light" type="submit" name="action">Ingresar nuevo proyecto
    <i class="material-icons right">add</i>
  </button>

  <?php echo form_close();?>
</div>
</div>
