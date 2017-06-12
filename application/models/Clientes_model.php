<?

    Class Clientes_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }



function obtenerClientes(){
  $this->db->order_by('RUT', 'DESC');
  $result = $this->db->get('clientes');
  if($result->num_rows() > 0)
  {
  return $result;
  }
  else{
  return false;
  }
}
function insertarCliente($data){
  $this->db->insert('clientes',array(
  'Rut'                  =>  $data['Rut'],
  'Nombre'               =>  $data['Nombre'],
  'Direccion'            =>  $data['Direccion'],
  'Fono'                 =>  $data['Fono'],
  'Email'                =>  $data['Email']
  )
  );
  }
  function obtenerCliente($rut){
    $this->db->where('Rut' , $rut);
    $result = $this->db->get('clientes');
    if ($result->num_rows() > 0)
    {
        return $result;
    }
    else
    {
        return FALSE;
    }

  }
  function editarCliente($rut, $data){
    $this->db->where('Rut', $rut);
    $this->db->update('clientes', $data);
  }
  function borrarCliente($rut){
    $this->db->where('Rut', $rut);
    $this->db->delete('clientes');
  }
}
?>
