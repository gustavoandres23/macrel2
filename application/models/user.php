<?php
Class User extends CI_Model
{
 public function login($username, $password)
 {
        $this->db->where('Nombre_user',$username);
        $this->db->where('pass',$password);

        $result = $this->db->get('usuario');

        if ($result->num_rows() == 1) {
            return $result->row();
        }else{
            return false;
        }
 }
}
?>
