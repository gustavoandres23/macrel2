

</script>
<div class="col 12">
  <div class="row">
   <a href="<?php echo base_url()?>home" class="waves-effect waves-orange btn-flat">Mi Dashboard</a>

  </div>

<ul>

<li class="divider"></li>
<h4 class="center orange-text light">Editar usuario del sistema</h4>
<li class="divider"></li>

<br>
</ul>
</div>

  <div class="">
  <div class="light center red-text">
  <?php echo validation_errors(); ?>
  </div>



<?php echo form_open('ctl_usuarios/updUsuario/'.$id);?>

  <div class="input-field col s12">
      <input id="rut" value="<? echo $rut?>" name="rut" required oninput="checkRut(this)" type="text" class="validate">
      <label class="light" for="rut">Rut</label>
  </div>

  <div class="input-field col s12">
      <input id="nombre" value="<? echo $nombre?>" name="nombre" type="text" class="validate">
      <label class="light" for="nombre">Nombre</label>
  </div>

  <div class="input-field col s12">
      <input id="apellidos" value="<? echo $apellidos?>" name="apellidos" type="text" class="validate">
      <label class="light" for="apellidos">Apellidos</label>
  </div>

  <div class="input-field col s12">
      <input id="username" value="<? echo $username?>" name="username" type="text" class="validate">
      <label class="light" for="username">Nombre de usuario (ID)</label>
  </div>

  <div class="input-field col s12">
      <input id="password" value="<? echo $password?>" name="password" type="text" class="validate">
      <label class="light" for="direcion">Contraseña provisoria</label>

  </div>

    <div class="input-field col s12">
        <input id="email" value="<? echo $email?>" name="email" type="email" class="validate">
        <label class="light" for="email" data-error="wrong" data-success="right">correo electronico</label>
    </div>


    <div class=" input-field col s6">
      <p class="light">Nivel de usuario:</p>
      <select class="browser-default"  name="nivelusuario">
        <option value="<?php echo $perfil?>"><?php echo $perfil?></option>
        <option value="1">Administrador = 1</option>
        <option value="2">Compras y despacho = 2</option>
        <option value="3">Supervisor = 3</option>
      </select>
    </div>

  <br>


    <button class="btn-large waves-effect waves-light" type="submit"  name="action">Editar usuario
      <i class="material-icons right">edit</i>
    </button>
    

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
