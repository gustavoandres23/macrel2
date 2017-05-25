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
        $query = $this->db->get('proveedores');
        if($query->num_rows() > 0) return $query;
        else return false;
      }
      function borrarproveedor($proveedores){
      $this->db->where('RUT', $proveedores);
      $this->db->delete('proveedores');
      }


}
