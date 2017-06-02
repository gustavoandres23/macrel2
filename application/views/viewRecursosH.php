<div class="row">
 <a href="<?php echo base_url()?>home" class="waves-effect waves-teal btn-flat">Mi Dashboard</a>
 <a href="<?php echo base_url()?>ctl_recursosh/addRecursosH" class="right btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">add</i></a>

</div>

<div class="col s12">
<ul>
<li class="divider"></li>
<h4 class="center orange-text light">Detalle de recursos humanos</h4>
<li class="divider"></li>

</ul>
</div>
<div class="fixed-action-btn horizontal click-to-toggle">
   <a class="btn-floating btn-large blue-grey darken-1">
     <i class="material-icons">menu</i>
   </a>
   <ul>
     <li><a href="<?php echo base_url()?>home" class="btn-floating red"><i class="material-icons">home</i></a></li>
   </ul>
 </div>
<form class="#" action="<?php echo base_url()?>ctl_recursosh/" method="post">


<table id="" class="display table bordered centered">
      <thead>
        <tr>
            <th>Selecciona</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido(s)</th>
            <th>Valor Hora</th>
            <th>Detalle</th>
            <th>Opciones</th>
        </tr>
      </thead>

    <?php
    foreach ($recursosh->result() as $recursosh) {
    ?>
      <tbody>
        <tr>
          <td><div class="switch">
            <label>
              Off
              <input type="checkbox" name="check_list[]" value="<? echo $recursosh->RUT;?>">
              <span class="lever"></span>
              On
            </label>
          </div></td>
          <td>  <? echo $recursosh->RUT;?>  </td>
          <td>  <? echo $recursosh->Nombre;?> </td>
          <td>  <? echo $recursosh->Apellidos;?>  </td>
          <td>  <? echo $recursosh->Valor_Hora;?>  </td>
          <td>  <? echo $recursosh->Detalle;?> </td>
          <td> <a href="#"><i class="material-icons green-text">mode_edit</i></a>    <a href="#"><i class="material-icons red-text">delete</i></a></td>
        </tr>
    <?php } ?>
</tbody>


</table>


    <br>
    <div class="row center">
      <button class="btn waves-effect waves-light" type="submit" name="action">Agregar lista de trabajadores
  <i class="material-icons right">add</i>
</button>
    </div>
</form>
<div class="container">

<ul class="collection" id="checked">
<?php
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {?>
        <li class="collection-item active" value="<?echo $check;?>"><?echo $check;?> </li> <?
    }
}
?>


</ul>
</div>
