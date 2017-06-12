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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <link href="<?php echo base_url();?>assets/css/materialize.min.css" rel="stylesheet">


        <!--Imported JS Links-->
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.10.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
        <script src="<?php echo base_url();?>assets/js/additional-methods.js"></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </head>
    <body>



<ul id="slide-out" class="side-nav">
   <li><div class="userView">
     <div class="background">
       <img src="images/office.jpg">
     </div>
     <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
     <a href="#!name"><span class="white-text name">John Doe</span></a>
     <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
   </div></li>
   <li><a href="<?php echo base_url()?>Ctl_cyd"><i class="material-icons">home</i>Home</a></li>
   <li><a href="#!">Second Link</a></li>
   <li><div class="divider"></div></li>
   <li><a class="subheader">Subheader</a></li>
   <li><a class="waves-effect" href="<?php echo base_url()?>verifyLogin/logout_ci">Cerrar Sesion</a></li>
 </ul>
 <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
 <div class="container">
