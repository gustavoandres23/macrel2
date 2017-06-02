<?

    Class RecursosH_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }

      function insertarRecursosH($data){
      $this->db->insert('recursosh',array(
      'RUT'          =>  $data['Rut'],
      'Nombre'       =>  $data['Nombre'],
      'Apellidos'    =>  $data['Apellidos'],
      'Valor_Hora'   =>  $data['Valor_Hora'],
      'Detalle'      =>  $data['Detalle']
      )
      );
      }
      function obtenerRecursosH(){
        $result = $this->db->get('recursosh');
        if($result->num_rows() > 0)
        {
        return $result;
        }
        else{
        return false;
        }
      }


}
