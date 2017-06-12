<?

    Class Cotizaciones_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }

      function insertarMaterial($data){
      $this->db->insert('lista_mat',array(
      'Nfolio'               =>  $data['nfolio'],
      'nom_mat'              =>  $data['material'],
      'unidad'               =>  $data['unidad'],
      'cantidad'             =>  $data['cantidad']
      )
      );
      }
      function obtenerMateriales($buscaFolio){
        $this->db->where('Nfolio', $buscaFolio);
        $result = $this->db->get('lista_mat');
        if($result->num_rows() > 0)
        {
        return $result;
        }
        else{
        return false;
        }
      }
      function buscarFolio($Folio){
            $this->db->where('Nfolio' , $Folio);
            $result = $this->db->get('lista_mat');
            if ($result->num_rows() > 0) {
              return $result;
            }
            else {
              return false;
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
