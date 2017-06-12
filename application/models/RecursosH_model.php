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
      function obtenerTrabajador($rut){
            $this->db->where('RUT' , $rut);
            $result = $this->db->get('recursosh');
            if ($result->num_rows() > 0) {
              return $result;
            }
            else {
              return FALSE;
            }

      }
      function obtenerListaMano(){
        $this->db->select('*');
        $this->db->from('lista_mano as lista');
        $this->db->join('proyectos as p', 'p.ID_Proyecto = lista.ID_Proyecto' ,"inner");
        $result = $this->db->get();

        if($result->num_rows() > 0)
        {
        return $result;
        }
        else{
        return false;
        }
      }


}
