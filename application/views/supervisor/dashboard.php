<!-- Dashboard Supervisor-->

<div class="row">
 <h4 class="light"><i class="material-icons small">perm_identity</i>Bienvenido: <?php echo $nombre;?></h4>
 <div class="divider"></div>
</div>

     <div class="card">
        <div class="card-content">
          <span class="card-title teal-text">Proyectos</span>
        </div>
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width">
            <li class="tab"><a class="" href="#test4">Proyectos</a></li>
            <li class="tab"><a class="active" href="#test5">Avance</a></li>

          </ul>
        </div>
        <div class="card-content grey lighten-4">
          <div  id="test4">

            <!--Tabla de proyecto-->

            <table class="bordered centered">
                  <thead>
                    <tr>
                        <th>Proyecto</th>
                        <th>Cliente</th>
                        <th>Ubicacion</th>
                        <th>Estado</th>
                        <th>Equipo</th>
                        <th>Lista material</th>
                        <th>Utilidad</th>
                    </tr>
                  </thead>

                  <?php
                  foreach ($proyectos->result() as $proyecto){
                  ?>
                  <tbody>
                    <tr>
                      <td>  <? echo $proyecto->ID_Proyecto;?>  </td>
                      <td>  <? echo $proyecto->ID_Cliente;?> </td>
                      <td>  <? echo $proyecto->Ubicacion;?>  </td>
                      <td>  <? echo $proyecto->Estado;?> </td>
                      <td>  <? echo $proyecto->Lista_Mano;?>  </td>
                      <td>  <? echo $proyecto->Lista_Mat;?>  </td>
                      <td>  <? echo $proyecto->Utilidad;?>  </td>

                    </tr>
                  </tbody>
                <?php } ?>

              </table>

          </div>
          <div class="center" id="test5">Avance</div>
        </div>
      </div>

      <!-- Divide contenedores de dashboard -->
      <div class="divider"></div>

     <div class="row">
       <div class="col s6">
         <div class="card red darken-1">
           <div class="card-content white-text">
             <span class="card-title">Control de mano de obra</span>
           </div>
           <div class="card-action">
             <a href="<?php echo base_url()?>ctl_recursosH/supVerRecursosH" class="white-text"><i class="material-icons small white-text">assignment_ind</i>Ver Trabajadores</a>
             <a href="<?php echo base_url();?>ctl_recursosh/viewListaMano" class="white-text"><i class="material-icons small white-text">supervisor_account</i>Equipos</a>
           </div>
         </div>
       </div>
           <div class="right col s6">
             <div class="card green darken-3">
               <div class="card-content white-text">
                 <span class="card-title">Proveedores</span>
               </div>
               <div class="card-action">
                 <a href="<?php echo base_url()?>ctl_prov/supVerProv" class="white-text"><i class="material-icons small white-text">library_books</i>Datos Proveedores</a>
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
