<!--   show in controller view dashboard admin -->
<div class="row">
 <h4 class="light"><i class="material-icons small">perm_identity</i>Bienvenido: <?php echo $nombre;?></h4>
 <div class="divider"></div>

</div>
    <div class="row">
      <div class="card-content grey lighten-4">
        <h4 class="center light">Proyectos en obras</h4>
        <div class="row">


            <a class='dropdown-button btn grey' href='#' data-activates='dropdownInfo'><i class="material-icons large red-text">info</i>Información de colores</a>


            <ul id='dropdownInfo' class='dropdown-content'>
              <li><a href="#!"><i class="material-icons orange-text">timelapse</i> En espera</a></li>
              <li><a href="#!"><i class="material-icons yellow-text">timelapse</i> En progreso</a></li>
              <li><a href="#!"><i class="material-icons green-text">timelapse</i> Terminado</a></li>
            </ul>

        </div>
        <a class="right btn-floating btn-large waves-effect waves-light red" href="<?echo base_url()?>ctl_proy/addproy"><i class="material-icons">add</i></a>

        <div class="center" id="test7">
          <table class="responsive-table highlight">
                <thead>
                  <tr>
                      <th>Nombre Proyecto</th>
                      <th>Cliente</th>
                      <th>Ubicacion</th>
                      <th>Lista mano de obra</th>
                      <th>Lista material</th>
                      <th>Utilidad</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                  </tr>
                </thead>

                <?php
                foreach ($proyectos->result() as $proyecto){
                ?>

                <tbody>
                  <tr>
                    <td> <a href="#"><? echo $proyecto->Nombre_Proyecto;?></a></td>
                    <td>  <? echo $proyecto->ID_Cliente;?> </td>
                    <td>  <? echo $proyecto->Ubicacion;?>  </td>
                    <td>  <? echo $proyecto->Lista_Mano;?>  </td>
                    <td>  <? echo $proyecto->Lista_Mat;?>  </td>
                    <td>  <? echo $proyecto->Utilidad;?>  </td>
                    <td>  <?
                    if($proyecto->Estado=='1'){
                      ?><a class="btn-floating orange pulse"><i class="material-icons">timelapse</i></a>
                      <?
                    }
                    if ($proyecto->Estado=='2') {
                      ?><a class="btn-floating yellow pulse"><i class="material-icons">timelapse</i></a>
                      <?
                    }
                    if ($proyecto->Estado=='3') {
                      ?><a class="btn-floating green pulse"><i class="material-icons">timelapse</i></a>
                      <?
                    }?>                  </td>
                    <td> <a href="<? echo base_url();?>ctl_proy/getProyecto/<?echo $proyecto->ID_Proyecto?>"><i class="material-icons green-text">mode_edit</i></a>   <a href="#"><i class="material-icons red-text">delete</i></a></td>
                  </tr>
                </tbody>
              <?php } ?>

            </table>



        </div>
      </div>
      </div>

      <!-- Divide contenedores de dashboard -->
      <div class="divider"></div>

    <div class="row">
       <div class="col s6">
         <div class="card blue-grey darken-1">
           <div class="card-content white-text">
             <span class="card-title">Administrar usuarios</span>
           </div>
           <div class="card-action">
             <a href="<?php echo base_url()?>ctl_usuarios/addUsuario" class="white-text"><i class="material-icons small white-text">assignment_ind</i>Agregar usuario</a>
             <a href="<?php echo base_url()?>ctl_usuarios" class="white-text"><i class="material-icons small white-text">supervisor_account</i>Ver usuarios</a>
           </div>
         </div>
       </div>
       <div class="col s6">
         <div class="card red darken-1">
           <div class="card-content white-text">
             <span class="card-title">Control de mano de obra</span>
           </div>
           <div class="card-action">
             <a href="<?php echo base_url()?>ctl_recursosh" class="white-text"><i class="material-icons small white-text">assignment_ind</i>Ver Trabajadores</a>
             <a href="<?php echo base_url();?>ctl_recursosh/viewListaMano" class="white-text"><i class="material-icons small white-text">supervisor_account</i>Equipos</a>
           </div>

         </div>
       </div>
     </div>
     <!-- Divide contenedores de dashboard -->
     <div class="divider"></div>

     <div class="card">
        <div class="card-content">
          <span class="card-title teal-text">Control de materiales</span>
        </div>
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width">
            <li class="tab"><a class="" href="#test4">Nuevo elemento</a></li>
            <li class="tab"><a class="active" href="#test5">Inventario</a></li>
            <li class="tab"><a href="#test6">Despacho</a></li>
          </ul>
        </div>
        <div class="card-content grey lighten-4">
          <div  id="test4">
            <!--
            <a href="" class="teal-text"><i class="material-icons small teal-text">add</i>Agregar nuevo material</a>
          -->
          <div class="col 12">



          <h4 class="center light teal-text">Ingresar nuevo material</h4>
          <li class="divider"></li>
          <br>
          </div>

          <div class="container">

            <div class="row center">
              <div class="light red-text">
            <?php echo validation_errors(); ?>
              </div>

            <?php echo form_open('ctl_inventario/addMaterial'); ?>

          <div class="row">

            <div class="input-field col s12">
                <input id="nombre_material" name="nombre_material" type="text" class="validate">
                <label for="nombre_material">Material:</label>
            </div>

            <div class="input-field col s12">
                <input id="unidad_medida" name="unidad_medida" type="text" class="validate">
                <label for="unidad_medida">Unidad de medida:</label>
            </div>

            <div class="input-field col s12">
                <input id="cantidad" name="cantidad" type="number" class="validate">
                <label for="cantidad">Cantidad:</label>
            </div>

            <div class="input-field col s12">
                <input id="ubicacion" name="ubicacion" type="text" class="validate">
                <label for="ubicacion">Ubicacion:</label>
            </div>

            <button class="btn-large waves-effect waves-light" type="submit" name="action">Agregar nuevo material
              <i class="material-icons right">add</i>
            </button>

            </div>

            <?php echo form_close();?>
          </div>
          </div>



          </div>
          <div class="center" id="test5">
            <a href="<?php echo base_url()?>ctl_inventario" class="waves-effect waves-teal btn-flat"><i class="material-icons medium teal-text">subject</i>Ver inventario</a>
          </div>
          <div class="right" id="test6">
            asdasd
          </div>
        </div>
      </div>

      <!-- Divide contenedores de dashboard -->
      <div class="divider"></div>

     <div class="row">
        <div class="left col s6">
          <div class="card yellow darken-3">
            <div class="card-content white-text">
              <span class="card-title">Clientes</span>
            </div>
            <div class="card-action">
              <a href="<?php echo base_url()?>ctl_clientes" class="white-text"><i class="material-icons small white-text">perm_contact_calendar</i>Ver clientes</a>
              <a href="<? echo base_url();?>ctl_clientes/addCliente/" class="white-text"><i class="material-icons small white-text">library_add</i>Nuevo cliente</a>
            </div>
          </div>
        </div>
           <div class="right col s6">
             <div class="card green darken-3">
               <div class="card-content white-text">
                 <span class="card-title">Proveedores</span>
               </div>
               <div class="card-action">
                 <a href="<?php echo base_url()?>ctl_prov" class="white-text"><i class="material-icons small white-text">library_books</i>Datos Proveedores</a>
                 <a href="<? echo base_url()?>ctl_prov/addprov" class="white-text"><i class="material-icons small white-text">add</i>Nuevo</a>
               </div>
             </div>
           </div>
      </div>
      <!-- Divide contenedores de dashboard -->
      <div class="divider"></div>


<!-- Boton interactivo -->

<div class="fixed-action-btn horizontal click-to-toggle">
   <a class="btn-floating btn-large blue-grey darken-1">
     <i class="material-icons">menu</i>
   </a>
   <ul>
     <li><a href="<?php echo base_url()?>home" class="btn-floating red"><i class="material-icons">home</i></a></li>
     <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
     <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
     <li><a class="btn-floating blue"><i class="material-icons">settings</i></a></li>
   </ul>
 </div>
