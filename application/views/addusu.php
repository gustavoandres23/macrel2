

<div class="col 12">
  <div class="row">
   <a href="<?php echo base_url()?>home" class="waves-effect waves-orange btn-flat">Mi Dashboard</a>
   <a href="<?php echo base_url()?>ctl_usuarios/" class="right btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">supervisor_account</i></a>

  </div>

<ul>

<li class="divider"></li>
<h4 class="center orange-text light">Ingresar nuevo usuario al sistema</h4>
<li class="divider"></li>

<br>
</ul>
</div>

  <div class="">
  <div class="light center red-text">
  <?php echo validation_errors(); ?>
  </div>


<?php echo form_open('ctl_usuarios/addUsuario');?>

  <div class="input-field col s12">
      <input id="rut" name="rut" required oninput="checkRut(this)" placeholder="12345678-9" type="text" class="validate">
      <label class="light" for="rut">Rut</label>
  </div>

  <div class="input-field col s12">
      <input id="nombre" name="nombre" type="text" class="validate">
      <label class="light" for="nombre">Nombre</label>
  </div>

  <div class="input-field col s12">
      <input id="apellidos" name="apellidos" type="text" class="validate">
      <label class="light" for="apellidos">Apellidos</label>
  </div>

  <div class="input-field col s12">
      <input id="username" name="username" type="text" class="validate">
      <label class="light" for="username">Nombre de usuario (ID)</label>
  </div>

  <div class="input-field col s12">
      <input id="password" name="password" type="text" class="validate">
      <label class="light" for="direcion">Contraseña provisoria</label>
        <p class="light">*Las contraseñas provisorias son para ser modificadas por el usuario al momento de iniciar sesion. </p>
  </div>

    <div class="input-field col s12">
        <input id="email" name="email" type="email" class="validate">
        <label class="light" for="email" data-error="wrong" data-success="right">correo electronico</label>
    </div>


    <div class="input-field col s12">
      <select class="browser-default" name="nivelusuario">
        <option value="" disabled selected>Seleccionar nivel de acceso</option>
        <option value="1">Administrador</option>
        <option value="2">Compras y despacho</option>
        <option value="3">Supervisor</option>
      </select>
    </div>

  <br>


    <button class="btn-large waves-effect waves-light" type="submit"  name="action">Ingresar nuevo usuario
      <i class="material-icons right">add</i>
    </button>
    <script src="<?php echo base_url()?>assets/js/validarut.js"></script>

    <?php echo form_close()?>


<div class="fixed-action-btn horizontal click-to-toggle">
   <a class="btn-floating btn-large blue-grey darken-1">
     <i class="material-icons">menu</i>
   </a>
   <ul>
     <li><a href="<?php echo base_url()?>home" class="btn-floating red"><i class="material-icons">home</i></a></li>
   </ul>
 </div>
</div>
