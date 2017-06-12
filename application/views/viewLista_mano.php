<div class="row">


</div>

<div class="col 12">

<ul>
<li class="divider"></li>
<h4 class="center orange-text light">Lista mano de obra</h4>
<li class="divider"></li>

</ul>
</div>
<table class="bordered centered">
      <thead>
        <tr>
            <th>Nombre de equipo</th>
            <th>Area</th>
            <th>Nombre de proyecto</th>
            <th>Trabajador</th>
            <th>Fecha Inicio</th>
            <th>Fecha Termino</th>
            <th>Valor dia</th>
            <th>Valor Total</th>
            <th>Opciones</th>
        </tr>
      </thead>

    <?php
    foreach ($lista_mano->result() as $lista) {
    ?>
      <tbody>
        <tr>
          <td>  <? echo $lista->Nombre_Lista;?>  </td>
          <td>  <? echo $lista->ID_Area;?> </td>
          <td>  <? echo $lista->Nombre_Proyecto;?>  </td>
          <td>  <? echo $lista->Trabajador;?> </td>
          <td>  <? echo $lista->Fecha_Inicio;?>  </td>
          <td>  <? echo $lista->Fecha_Fin;?>  </td>
          <td>  <? echo $lista->Valor_Dia;?>  </td>
          <td>  <? echo $lista->Valor_Total;?>  </td>
          <td> <a href="#"><i class="material-icons green-text">mode_edit</i></a>    <a href="#"><i class="material-icons red-text">delete</i></a></td>
        </tr>
      </tbody>
    <?php } ?>
</table>
