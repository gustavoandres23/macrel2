<!--   show in controller view dashboard admin -->
<div class="row">
 <h4 class="light"><i class="material-icons small">perm_identity</i>Bienvenido: <?php echo $nombre;?></h4>
 <div class="divider"></div>
 <a href="<?php echo base_url()?>home" class="waves-effect waves-teal btn-flat">Mi Dashboard</a>
</div>

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
             <a href="#" class="white-text"><i class="material-icons small white-text">supervisor_account</i>Proyectos</a>
           </div>
         </div>
       </div>
     </div>
     <!-- Divide contenedores de dashboard -->
     <div class="divider"></div>

     <div class="row">
        <div class="col s12">
          <div class="card yellow darken-3">
            <div class="card-content white-text">
              <span class="card-title">Control de materiales</span>
            </div>
            <div class="card-action">
              <a href="#" class="white-text"><i class="material-icons small white-text">library_books</i>Detalle inventario</a>
              <a href="#" class="white-text"><i class="material-icons small white-text">loop</i>Actualizar</a>
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
