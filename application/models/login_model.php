<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model{
  function __construct(){
    parent::__construct();
  }

function buscarUsuario(){
   $this -> db -> select('Id_user, nombre_user, pass');
   $this -> db -> from('usuario');
   $this -> db -> where('username', $username);
   $this -> db -> where('pass', MD5($pass));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
}

}

?>
