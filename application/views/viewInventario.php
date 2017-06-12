
<div class="col s12">
<ul>
<li class="divider"></li>
<h4 class="center orange-text light">Inventario</h4>
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


<table id="" class="display table bordered centered">
      <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Unidad de medida</th>
            <th>Ubicacion</th>
            <th>Opciones</th>
        </tr>
      </thead>

    <?php
    foreach ($inventario->result() as $inventario) {
    ?>
      <tbody>
        <tr>
          <td>  <? echo $inventario->Nombre;?> </td>
          <td>  <? echo $inventario->Cantidad;?>  </td>
          <td>  <? echo $inventario->Unidad_Medida;?>  </td>
          <td>  <? echo $inventario->Ubicacion;?> </td>
          <td> <a href="<?php echo base_url()?>ctl_inventario/getMaterial/<? echo $inventario->ID_Material;?>"><i class="material-icons green-text">mode_edit</i></a>    <a href="<?php echo base_url()?>ctl_inventario/delMaterial/<? echo $inventario->ID_Material;?>"><i class="material-icons red-text">delete</i></a></td>
        </tr>
    <?php } ?>
</tbody>
</table>
