<div class="row">
 <a href="<?php echo base_url()?>home" class="waves-effect waves-teal btn-flat">Mi Dashboard</a>
 <a href="<?php echo base_url()?>ctl_usuarios/addUsuario" class="right btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">add</i></a>

</div>

<div class="col s12">
<ul>
<li class="divider"></li>
<h4 class="center orange-text light">Detalle de usuarios</h4>
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
<table class="bordered centered">
      <thead>
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido(s)</th>
            <th>Nombre usuario</th>
            <th>Nivel de acceso</th>
            <th>E-Mail</th>
            <th>Opciones</th>
        </tr>
      </thead>

    <?php
    foreach ($usuarios->result() as $usuarios) {
    ?>
      <tbody>
        <tr>
          <td>  <? echo $usuarios->RUT_User;?>  </td>
          <td>  <? echo $usuarios->Nombre;?> </td>
          <td>  <? echo $usuarios->Apellidos;?>  </td>
          <td>  <? echo $usuarios->Nombre_User;?>  </td>
          <td>  <? echo $usuarios->Nivel_Acceso;?> </td>
          <td>  <? echo $usuarios->Email;?>  </td>
          <td> <a href="<?php echo base_url()?>ctl_usuarios/getUsuario/<? echo $usuarios->ID_User;?>"><i class="material-icons green-text">mode_edit</i></a>  <a href="<?php echo base_url()?>ctl_usuarios/delUsuario/<? echo $usuarios->ID_User;?>" ><i class="material-icons red-text">delete</i></a></td>
        </tr>
      </tbody>


    <?php } ?>
  </table>
