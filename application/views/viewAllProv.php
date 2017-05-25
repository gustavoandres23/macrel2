<div class="col 12">

<ul>
<h4 class="center orange-text light">Detalle de proveedores</h4>
<li class="divider"></li>

</ul>
</div>
<table class="bordered centered">
      <thead>
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
            <th>Opcion</th>
        </tr>
      </thead>

    <?php
    foreach ($proveedores->result() as $proveedores) {
    ?>
      <tbody>
        <tr>
          <td>  <? echo $proveedores->RUT;?>  </td>
          <td>  <? echo $proveedores->Nombre;?> </td>
          <td>  <? echo $proveedores->Direccion;?>  </td>
          <td>  <? echo $proveedores->Fono;?> </td>
          <td>  <? echo $proveedores->Email;?>  </td>
          <td> <a href="#"><i class="material-icons green-text">mode_edit</i></a>    <a href="<?php echo base_url()?>seeprov/deleteproveedor(<?$proveedores->RUT;?>)"><i class="material-icons red-text">delete</i></a></td>
        </tr>
      </tbody>
    <?php } ?>
