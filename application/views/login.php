<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <!--Imported CSS Links-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="<?php echo base_url();?>assets/css/materialize.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

        <!--Imported JS Links-->
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.10.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
        <script src="<?php echo base_url()?>assets/js/additional-methods.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    </head>
    <body>


<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>

    <h1 class="header center orange-text">Inicio sesión</h1>
    <div class="row center">

      <div class="red-text light">
        <?php echo validation_errors(); ?>
        <?php echo form_open('verifylogin'); ?>


      </div>

  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
  <div class="row center">

    <div class="input-field col s6">
        <input id="username" name="username" type="text" class="validate">
        <label for="username">ID</label>
    </div>

    <div class="input-field col s6">
        <input id="password" name="password" type="password" class="validate">
        <label for="password">Password</label>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesión
      <i class="material-icons right">send</i>
    </button>
  </div>


<?php echo form_close(); ?>



    </div>

  </div>
</div>

    <!--  Scripts file-link-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/init.js"></script>


</body>
</html>
