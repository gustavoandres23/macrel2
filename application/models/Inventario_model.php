<?

    Class Inventario_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }

      function insertarmaterial($data){
      $this->db->insert('inventario',array(
      'Nombre'               =>  $data['Nombre'],
      'Unidad_Medida'        =>  $data['Unidad_Medida'],
      'Cantidad'             =>  $data['Cantidad'],
      'Ubicacion'            =>  $data['Ubicacion']
      )
      );
      }
      function obtenerMateriales(){
        $this->db->order_by('ID_Material', 'DESC');
        $result = $this->db->get('inventario');
        if($result->num_rows() > 0)
        {
        return $result;
        }
        else{
        return false;
        }
      }
      function obtenerMaterial($id){
            $this->db->where('ID_Material' , $id);
            $result = $this->db->get('inventario');
            if ($result->num_rows() > 0) {
              return $result;
            }
            else {
              return FALSE;
            }

      }
      function editarMaterial($ID_Material, $data){
        $this->db->where('ID_Material', $ID_Material);
        $this->db->update('inventario',$data);
      }
      function borrarMaterial($ID_Material){
           $this -> db -> where('ID_Material', $ID_Material);
           $this -> db -> delete('inventario');
     }


}
