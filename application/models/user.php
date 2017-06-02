<?php
Class User extends CI_Model
{
  function login($username, $password){
        $this->db->where('Nombre_User',$username);
        $this->db->where('Pass',$password);

        $result = $this->db->get('usuario');

        if ($result->num_rows() == 1)
        {
            return $result->row();
        }
        else
        {
            return false;
        }
 }
 function obtenerUsuarios() {
        $this->db->order_by('ID_User', 'DESC');
        $result = $this->db->get('usuario');
        if ($result->num_rows() > 0)
        {
            return $result;
        }
        else
        {
          return false;
        }
 }
 function insertarUsuario($data){
        $this->db->insert('usuario', array(
          'RUT_User'      =>    $data['RUT_User'],
          'Nombre'        =>    $data['Nombre'],
          'Apellidos'     =>    $data['Apellidos'],
          'Pass'          =>    $data['Pass'],
          'Nombre_User'   =>    $data['Nombre_User'],
          //'Ultima_conexion' =>  $data['Ultima_conexion'
          'Nivel_Acceso'  =>    $data['Nivel_Acceso'],
          'Email'         =>    $data['Email']
        ));
 }
 function borrarUsuario($id){
      $this -> db -> where('ID_User', $id);
      $this -> db -> delete('usuario');
}
function obtenerEnlace($id){
      $this->db->where('ID_User' , $id);
      $result = $this->db->get('usuario');
      if ($result->num_rows() > 0) {
        return $result;
      }
      else {
        return FALSE;
      }

}
function editarUsuario($ID_User, $data){
      $this->db->where('ID_User', $ID_User);
      $this->db->update('usuario',$data);
}

}
?>
