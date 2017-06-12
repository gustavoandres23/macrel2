<div class="row">


</div>

<div class="col 12">

<ul>
<li class="divider"></li>
<h4 class="center orange-text light">Clientes</h4>
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
            <th>E-Mail</th>
            <th>Opcion</th>
        </tr>
      </thead>

    <?php
    foreach ($clientes->result() as $clientes) {
    ?>
      <tbody>
        <tr>
          <td>  <? echo $clientes->Rut;?>  </td>
          <td>  <? echo $clientes->Nombre;?> </td>
          <td>  <? echo $clientes->Direccion;?>  </td>
          <td>  <? echo $clientes->Fono;?> </td>
          <td>  <? echo $clientes->Email;?>  </td>
          <td> <a href="<?echo base_url();?>ctl_clientes/getCliente/<?echo $clientes->Rut;?>"><i class="material-icons green-text">mode_edit</i></a>    <a href="<?echo base_url();?>ctl_clientes/delCliente/<?php echo $clientes->Rut;?>"><i class="material-icons red-text">delete</i></a></td>
        </tr>
      </tbody>
    <?php } ?>
</table>
