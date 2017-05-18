<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('ID_User, Nombre_user, Pass, Nivel_Acceso');
   $this -> db -> from('usuario');
   $this -> db -> where('Nombre_user', $username);
   $this -> db -> where('Pass', $password);
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
