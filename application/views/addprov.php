<div class="col 12">


<ul>

<li class="divider"></li>
<h4 class="center orange-text light">Ingresar nuevo proveedor</h4>
<li class="divider"></li>

<br>
</ul>
</div>

<div class="row center">
  <div class="light red-text">
<?php echo validation_errors(); ?>
  </div>


<?php echo form_open('ctl_prov/addprov');?>
  <div class="input-field col s6">
      <input id="rut" name="rut" placeholder="76543210-9" type="text" class="validate">
      <label for="rut">Rut proveedor</label>
  </div>

  <div class="input-field col s6">
      <input id="nombre" name="nombre" type="text" class="validate">
      <label for="nombre">Nombre Proveedor</label>
  </div>

  <div class="input-field col s6">
      <input id="direccion" name="direccion" type="text" class="validate">
      <label for="direcion">Dirección/Localicación</label>
  </div>

    <!--<div class="input-field col s6">
        <input id="Dirección" type="text" class="validate">
        <label for="text">Giro comercial</label>
    </div>-->

    <div class="input-field col s6">
        <input id="fono" name="fono" type="number" class="validate">
        <label for="fono">Fono comercial</label>
    </div>

    <div class="input-field col s6">
        <input id="email" name="email" type="email" class="validate">
        <label for="email">correo electronico</label>
    </div>

    <button class="btn-large blue-grey waves-effect waves-light" type="submit" name="action">Ingresar nuevo proveedor
      <i class="material-icons right">add</i>
    </button>

<?php echo form_close()?>
</div>
