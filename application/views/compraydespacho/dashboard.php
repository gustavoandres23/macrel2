<div class="row">
 <h4 class="light"><i class="material-icons small">perm_identity</i>Bienvenido: <?php echo $nombre;?></h4>
 <div class="divider"></div>
</div>

<div class="card">
   <div class="card-content">
     <span class="card-title teal-text">Compras y despacho</span>
   </div>
   <div class="card-tabs">
     <ul class="tabs tabs-fixed-width">
       <li class="tab"><a class="active" href="#test4">Factura</a></li>
       <li class="tab"><a class="" href="#test5">Elementos por factura</a></li>
       <li class="tab"><a href="#test6">Ver Compras</a></li>
     </ul>
   </div>
   <div class="card-content grey lighten-4">
     <div  id="test4">

      <!-- TAB1-->
     <div class="col 12">
     <h4 class="center light teal-text">Ingresar nueva factura</h4>
     <li class="divider"></li>
     <br>
     </div>

     <div class="container">

       <div class="row center">
         <div class="light red-text">
       <?php echo validation_errors(); ?>
         </div>



       <?php echo form_open('ctl_cyd/addfactura'); ?>

     <div class="row">

       <div class="input-field col s12">
           <input id="num_factura" name="num_factura" type="text" class="validate">
           <label for="num_factura">Numero de factura:</label>
       </div>

       <div class="input-field col s12">
           <input id="fecha" name="fecha" type="date" class="center-align datepicker validate">
           <label for="fecha">Fecha:</label>
       </div>

       <div class=" input-field col s12">
         <p class="input-field">Proveedores:</p>
         <select class="browser-default light"  name="proveedor">
           <?php
           foreach($proveedores->result() as $proveedor)
           {
               ?>
               <option value="<?=$proveedor->RUT;?>"><? echo $proveedor->Nombre;?></option>
               <?php
           }
           ?>
         </select><br>
       </div>

       <button class="btn-large waves-effect waves-light" type="submit" name="action">Agregar factura
         <i class="material-icons right">add</i>
       </button>

       </div>

       <?php echo form_close();?>
     </div>
     </div>
     </div>

     <!-- TAB2-->
     <div class="center" id="test5">

       <div class="col 12">
       <h4 class="center light teal-text">Ingresar productos por factura</h4>
       <li class="divider"></li>
       <br>
       </div>

       <div class="container">
         <div class="light red-text">
           <?php echo validation_errors(); ?>
         </div>

         <?php echo form_open('ctl_cyd/addMaterial');?>

       <div class="input-field col s12">
         <select name="factura_seleccionada">

           <?php
           foreach($facturas->result() as $factura)
           {
               ?>
               <option value="<?=$factura->ID_Factura;?>">Factura Nº:  <?=$factura->ID_Factura;?></option>
               <?php
           }
           ?>
         </select>
         <label>Numero de factura</label>
      </div>

       <div class="input-field col s12">
           <input id="nombre_material" name="nombre_material" type="text" class="validate">
           <label for="nombre_material">Nombre material:</label>
       </div>

       <div class="input-field col s12">
           <input id="unidad_medida" name="unidad_medida" type="text" class="validate">
           <label for="unidad_medida">Unidad de medida:</label>
       </div>

       <div class="input-field col s12">
           <input id="cantidad" name="cantidad" type="text" class="validate">
           <label for="cantidad">Cantidad:</label>
       </div>

       <div class="input-field col s12">
           <input id="precio_unitario" name="precio_unitario" type="text" class="validate">
           <label for="precio_unitario">Precio Unitario:</label>
       </div>

       <button class="btn-large waves-effect waves-light" type="submit" name="action">Agregar nuevo material
         <i class="material-icons right">add</i>
       </button>

       <?php echo form_close(); ?>
       </div>
     </div>

     <div class="" id="test6">

       <table class="centered bordered">
    <thead>
      <tr>
          <th>Nº Factura</th>
          <th>Fecha</th>
          <th>Proveedor</th>
          <th>Material</th>
          <th>Unidad de medida</th>
          <th>Cantidad</th>
          <th>Precio Unitario</th>
          <th>Precio Total</th>
      </tr>
    </thead>
    <?php
    foreach ($compras->result() as $compra) {
    ?>
    <tbody>
      <tr>
        <td><a href="#"><?echo $compra->ID_Factura;?></a></td>
        <td><?echo $compra->Fecha;?></td>
        <td><?echo $compra->Rut_Proveedor;?></td>
        <td><?echo $compra->Nombre_Material;?></td>
        <td><?echo $compra->Unidad_Medida;?></td>
        <td><?echo $compra->Cantidad;?></td>
        <td><?echo $compra->Precio_Unitario;?></td>
        <td><?echo $compra->Precio_Total;?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>

     </div>
   </div>
 </div>
