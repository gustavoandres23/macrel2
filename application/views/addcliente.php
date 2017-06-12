<div class="row">

 <a href="<?php echo base_url()?>ctl_prov" class="right btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">library_books</i></a>

</div>


<div class="col 12">


<ul>

<li class="divider"></li>
<h4 class="center orange-text light">Ingresar nuevo cliente</h4>
<li class="divider"></li>

<br>
</ul>
</div>

<div class="">
  <div class="light red-text">
<?php echo validation_errors(); ?>
  </div>


<?php echo form_open('');?>
  <div class="input-field col s12">
      <input id="rut" name="rut" required oninput="checkRut(this)" type="text" class="validate">
      <label class="light" for="rut">Rut</label>
  </div>

  <div class="input-field col s6">
      <input id="nombre" name="nombre" type="text" class="validate">
      <label for="nombre">Nombre Cliente</label>
  </div>

  <div class="input-field col s6">
      <input id="direccion" name="direccion" type="text" class="validate">
      <label for="direcion">Dirección/Localicación</label>
  </div>

    <div class="input-field col s6">
        <input id="fono" name="fono" type="number" class="validate">
        <label for="fono">Fono cliente</label>
    </div>

    <div class="input-field col s6">
        <input id="email" name="email" type="email" class="validate">
        <label for="email">correo electronico</label>
    </div>

    <button class="btn-large blue-grey waves-effect waves-light" type="submit" name="action">Ingresar nuevo cliente
      <i class="material-icons right">add</i>
    </button>

<?php echo form_close()?>
</div>
