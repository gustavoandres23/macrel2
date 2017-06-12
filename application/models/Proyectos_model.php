<?

    Class Proyectos_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }

      function insertarproyecto($data){
      $this->db->insert('proyectos', array(
      'Nombre_Proyecto'          =>  $data['proyecto'],
      'ID_Cliente'       =>  $data['cliente'],
      'Ubicacion'    =>  $data['ubicacion'],
      'Estado'         =>  $data['estado'],
      'Lista_mano'        =>  $data['lista_manoObra'],
      'Lista_mat'         =>  $data['lista_material'],
      'Utilidad'         =>  $data['utilidad']
      )
      );
      }
      function obtenerproyectos(){
        $result = $this->db->get('proyectos');
        if($result->num_rows() > 0)
        {
        return $result;
        }
        else{
        return false;
        }
      }
      function obtenerProyecto($id){
        $this->db->where('ID_Proyecto' , $id);
        $result = $this->db->get('proyectos');
        if ($result->num_rows() > 0)
        {
            return $result;
        }
        else
        {
            return FALSE;
        }

      }
      function editarProyecto($ID_Proyecto, $data){
        $this->db->where('ID_Proyecto', $ID_Proyecto);
        $this->db->update('proyectos', $data);
      }


}
