<?

    Class Proveedores_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }

      function insertarproveedor($data){
      $this->db->insert('proveedores',array(
      'RUT'          =>  $data['Rut'],
      'Nombre'       =>  $data['Nombre'],
      'Direccion'    =>  $data['Direccion'],
      'Fono'         =>  $data['Fono'],
      'Email'        =>  $data['Email']
      )
      );
      }
      function obtenerproveedores(){
        $result = $this->db->get('proveedores');
        if($result->num_rows() > 0)
        {
        return $result;
        }
        else{
        return false;
        }
      }


}
