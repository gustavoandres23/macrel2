<div class="col 12">


<ul>


<h4 class="center teal-text">Ingresar nuevo proyecto</h4>
<li class="divider"></li>
<br>
</ul>
</div>

<div class="row">

  <?php echo form_open('addproy/addnewproy'); ?>
<!--
  <div class="input-field col s6">
      <input id="nombreproyecto" type="text" class="validate">
      <label for="nombreproyecto">Nombre proyecto</label>
  </div>
-->
<div class="row">

  <div class="input-field col s6">
      <input id="nombrecliente" type="text" class="validate">
      <label for="nombrecliente">Nombre Cliente</label>
  </div>

  <div class="input-field col s6">
      <input id="rutcliente" type="text" class="validate">
      <label for="rutcliente">Rut cliente</label>
  </div>

  </div>


  <div class="input-field col s6">
      <input id="Ubicacion" type="text" class="validate">
      <label for="Ubicacion">Ubicación</label>
  </div>


  <div class="col s6">
    <label for="dateIni">Fecha inicio proyecto</label>
    <input type="date" id="dateIni" class="datepicker">
  </div>

  <div class="col s6">
    <label for="dateFin">Fecha termino proyecto</label>
    <input type="date" id="dateFin" class="datepicker">
  </div>

  <button class="btn-large waves-effect waves-light" type="submit" name="action">Ingresar nuevo proyecto
    <i class="material-icons right">add</i>
  </button>

  <?php echo form_close();?>

</div>
