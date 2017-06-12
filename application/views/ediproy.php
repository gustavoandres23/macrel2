
<div class="col 12">
  <div class="row">
   <a href="<?php echo base_url()?>home" class="waves-effect waves-orange btn-flat">Mi Dashboard</a>

  </div>

<ul>

<li class="divider"></li>
<h4 class="center orange-text light">Editar proyectos</h4>
<li class="divider"></li>

<br>
</ul>
</div>

  <div class="">
  <div class="light center red-text">
  <?php echo validation_errors(); ?>
  </div>


<?php echo form_open('ctl_proy/updProyecto/'.$id);?>

  <div class="input-field col s12">
      <input id="nombre" value="<? echo $nombre?>" name="nombre" type="text" class="validate">
      <label class="light" for="nombre">nombre de proyecto</label>
  </div>

  <div class=" input-field col s6">
    <p class="light">Cliente:</p>
    <select class="browser-default"  name="cliente">
    <option value="<?php echo $cliente?>"><?php echo $cliente?></option>
      <?php
      foreach($clientes->result() as $cliente)
      {
          ?>
          <option value="<?=$cliente->Rut;?>"><? echo $cliente->Nombre;?></option>
          <?php
      }
      ?>
    </select><br>
  </div>

  <div class="input-field col s12">
      <input id="ubicacion" value="<? echo $ubicacion?>" name="ubicacion" type="text" class="validate">
      <label class="light" for="ubicacion">Ubicacion</label>
  </div>


  <div class=" input-field col s6">
    <p class="light">Estado:</p>
    <select class="browser-default"  name="estado">
      <?php if ($estado == 1) {?>
        <option value="1">En espera</option>
        <?  } ?>
      <?php if ($estado == 2) {?>
        <option value="2">En progreso</option>
        <?  } ?>
      <?php if ($estado == 3) {?>
        <option value="3">Terminado</option>
        <?  } ?>
        <option value="1">En Espera</option>
        <option value="2">En Progreso</option>
        <option value="3">Terminado</option>

    </select><br>
  </div>


  <div class="input-field col s12">
      <input id="utilidad" value="<? echo $utilidad?>" name="utilidad" type="text" class="validate">
      <label class="light" for="utilidad">Utilidad ($)</label>

  </div>


  <br>


    <button class="btn-large waves-effect waves-light" type="submit"  name="action">Editar usuario
      <i class="material-icons right">edit</i>
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
