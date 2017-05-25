<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>IPT</title>
        <meta name="description" content="">


        <!--Imported CSS Links-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="<?php echo base_url();?>assets/css/materialize.min.css" rel="stylesheet">


        <!--Imported JS Links-->
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.10.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
        <script src="<?php echo base_url();?>assets/js/additional-methods.js"></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </head>
    <body>
      <!--componentes de dropdownlist 0 -->
    <div>
          <ul id="dropdown0" class="dropdown-content">
            <li><a href="#!">Crear nueva</a></li>
            <li class="divider"></li>
            <li><a href="#!">Historicas</a></li>
          </ul>

          <ul id="dropdown1" class="dropdown-content">
            <li><a href="<?php echo base_url();?>addproy">Nuevo</a></li>
            <li class="divider"></li>
            <li><a href="#!">Ver Todos</a></li>
          </ul>

          <!--componentes de dropdownlist 2 -->
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Nuevo</a></li>
            <li class="divider"></li>
            <li><a href="#!">Ver Todos</a></li>
          </ul>
          <!--componentes de dropdownlist 3 -->
          <ul id="dropdown3" class="dropdown-content">
            <li><a href="<?php echo base_url()?>addprov">Nuevo</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url()?>seeprov">Ver Todos</a></li>
          </ul>

    </div>
      <!--barra nav-->

      <nav class="teal" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo white-text">Macrel</a>
          <!-- Dropdown Trigger -->
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown0">Cotización<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1">Proyectos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown2">Mano de obra<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown3">Proveedores<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>

    <!--nav mobile-->

          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
                    <li><a href="badges.html"><i class="material-icons teal-text center-align">assessment</i></a></li>
                    <li><a href="collapsible.html"><i class="material-icons teal-text center-align">message</i></a></li>
                    <li><a href="mobile.html"><i class="material-icons teal-text center-align">more_vert</i></a></li>

            <!--dropdown nav mobile-->
            <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Cotización<i class="material-icons">arrow_drop_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">Crear nueva</a></li>
                          <li><a href="#!">Historicas</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>

                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header">Proyectos<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="<?php echo base_url();?>addproy">Crear nuevo</a></li>
                            <li><a href="#!">Ver todos</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>

                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header">Mano de obra<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="#!">Crear nuevo</a></li>
                            <li><a href="#!">Ver todos</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>

                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header">Proveedores<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="<?php echo base_url()?>addprov">Crear nuevo</a></li>
                            <li><a href="#!">Ver todos</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>

                </li>
          </ul>

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

          <!--nav mobile-->

        </div>
      </nav>
      <!--fin barra nav-->

        <li class="divider"></li>
<!--Barra de busqueda-->
<div class="row">
<nav>
  <div class="nav-wrapper teal lighten-1">
    <form>
      <div class="input-field col s6">
        <input id="search" type="search" value="Buscar" required>
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
      </div>
    </form>
      <!--Submenu-->

      <div class="col s6">
        <ul class="hide-on-med-and-down">
                <li><a href="#"><i class="material-icons white-text">assessment</i></a></li>
                <li><a href="#"><i class="material-icons white-text">message</i></a></li>
                <li><a href="<?php echo base_url()?>verifyLogin/logout_ci"><i class="material-icons white-text">input</i></a></li>
              </ul>
      </div>

  </div>
</nav>



</div>
