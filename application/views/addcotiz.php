<div class="row">
 <a href="<?php echo base_url()?>ctl_prov" class="right btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">library_books</i></a>
</div>

<div class="col 12">
<ul>
<li class="divider"></li>
<h4 class="center orange-text light">Crear nueva cotización</h4>
<li class="divider"></li>

<br>
</ul>
</div>

<div class="row center">
  <div class="light red-text">
<?php echo validation_errors(); ?>
  </div>


<?php echo form_open('ctl_cotizaciones/addcotizacion');?>
  <div class="input-field col s12">
      <input id="folio" name="folio" type="text" class="validate">
      <label for="folio">Folio</label>
  </div>

  <div class="input-field col s12">
      <input id="material" name="material" type="text" class="validate">
      <label for="material">Material</label>
  </div>

  <div class="input-field col s12">
      <input id="unidad" name="unidad" type="text" class="validate">
      <label for="unidad">Unidad de medida</label>
  </div>

  <div class="input-field col s12">
      <input id="cantidad" name="cantidad" type="text" class="validate">
      <label for="cantidad">Cantidad</label>
  </div>


    <button class="btn-large blue-grey waves-effect waves-light" type="submit" name="action">agregar materiales
      <i class="material-icons right">add</i>
    </button>

<?php echo form_close()?>

<br>
<li class="divider"></li><br>
<div class="row">

<?php echo form_open('ctl_cotizaciones/buscarFolio'); ?>

  <div class="input-field col s6">
      <input id="buscarFolio" name="Folio" type="text" class="validate">
      <label for="folio">Buscar numero de folio</label>
  </div>

    <button class="btn blue-grey waves-effect waves-light" type="submit" name="action">Buscar folio
      <i class="material-icons right">search</i>
    </button>

<?php echo form_close(); ?>
</div>


<table>
   <thead>
     <tr>
       <th>Folio</th>
       <th>Material</th>
       <th>Unidad</th>
       <th>Cantidad</th>
     </tr>
   </thead>
   <tbody>
     <?php
     foreach ($materiales->result() as $fila) {
       $Folio = $fila->Nfolio;
       $Material = $fila->nom_mat;
       $Unidad = $fila->unidad;
       $Cantidad = $fila->cantidad;
      ?>
     <tr>
       <td><?php echo $Folio; ?></td>
       <td><?php echo $Material; ?></td>
       <td><?php echo $Unidad; ?></td>
       <td><?php echo $Cantidad; ?></td>
     </tr>
     <?php } ?>

   </tbody>
 </table>

</div>
