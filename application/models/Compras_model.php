<?

    Class Compras_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }



function obtenerCompras(){

  $this->db->select('*');
  $this->db->from('compras as c');
  $this->db->join('factura as f', 'c.ID_Factura = f.ID_Factura' ,"inner");
  $this->db->order_by('c.ID_Factura', 'DESC');
  $result = $this->db->get();

  if($result->num_rows() > 0)
  {
  return $result;
  }
  else{
  return false;
  }
}
function obtenerFactura(){

  $this->db->order_by('ID_Factura', 'DESC');
  $result = $this->db->get('factura');
  if($result->num_rows() > 0)
  {
  return $result;
  }
  else{
  return false;
  }
}


//funcion mixta para insertar facturas de compra
function insertarFactura($data)
{
  $this->db->insert('factura',array(
  'ID_Factura'           =>  $data['Num_Fact'],
  'Fecha'                =>  $data['Fecha'],
  'Rut_Proveedor'        =>  $data['Proveedor']
  )
  );
}
function insertarMaterial($data)
{
  $this->db->insert('compras', array(
    'ID_Factura'             =>  $data['Num_Fact'],
    'Nombre_Material'             =>  $data['Nombre_Material'],
    'Unidad_medida'             =>  $data['Unidad_medida'],
    'Cantidad'             =>  $data['Cantidad'],
    'Precio_Unitario'             =>  $data['Precio_Unitario'],
    'Precio_Total'             =>  $data['Precio_Total']
  )
  );
}


}
