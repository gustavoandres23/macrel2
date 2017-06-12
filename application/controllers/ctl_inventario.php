<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_inventario extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Inventario_model','',TRUE);
  }

    /**

     */
    function index() {
    if($this->session->userdata('logged_in') != TRUE)
    {
    $this->session->sess_destroy();
    redirect(base_url().'login');
    }
    else {
      $data['inventario'] = $this->Inventario_model->obtenerMateriales();
      $this->load->view('header');
      $this->load->view('viewInventario', $data);
      $this->load->view('footer');
    }
    }
    function addMaterial(){

      $this->form_validation->set_rules('nombre_material', 'Material', 'trim|required|xss_clean');
      $this->form_validation->set_rules('unidad_medida', 'Unidad de medida', 'trim|required|xss_clean');
      $this->form_validation->set_rules('cantidad', 'Cantidad', 'trim|required|xss_clean');
      $this->form_validation->set_rules('ubicacion', 'Ubicacion', 'trim|required|xss_clean');

      if($this->form_validation->run() == FALSE)
      {
        //Field validation failed.  User redirected to login page
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
      }
      else
      {
        $data = array(
        'Nombre'           =>   $this->input->post('nombre_material'),
        'Unidad_Medida'    =>   $this->input->post('unidad_medida'),
        'Cantidad'         =>   $this->input->post('cantidad'),
        'Ubicacion'        =>   $this->input->post('ubicacion')
      );
      $this->Inventario_model->insertarmaterial($data);
      $data['inventario'] = $this->Inventario_model->obtenerMateriales();
      $this->load->view('header');
      $this->load->view('viewInventario', $data);
      $this->load->view('footer');
      }
    }
    function getMaterial($ID_Material){
      $obtenerFila = $this->Inventario_model->obtenerMaterial($ID_Material);
      if ($obtenerFila != FALSE) {
        foreach ($obtenerFila->result() as $row) {

          $nombre           =      $row->Nombre;
          $unidad_medida    =      $row->Unidad_Medida;
          $cantidad         =      $row->Cantidad;
          $ubicacion        =      $row->Ubicacion;
        }

        $data = array(
          'id'              =>    $ID_Material,
          'nombre_material' =>    $nombre,
          'unidad_medida'   =>    $unidad_medida,
          'cantidad'        =>    $cantidad,
          'ubicacion'       =>    $ubicacion);
      }

      else
      {
        return FALSE;
      }
      $this->load->view('header');
      $this->load->view('ediinventario', $data);
      $this->load->view('footer');

    }
    function updMaterial($ID_Material){
      $data = array(
        'Nombre'          =>   $this->input->post('nombre_material'),
        'Unidad_medida'   =>   $this->input->post('unidad_medida'),
        'Cantidad'        =>   $this->input->post('cantidad'),
        'Ubicacion'       =>   $this->input->post('ubicacion')
      );
      $this->Inventario_model->editarMaterial($ID_Material, $data);
      $data['inventario'] = $this->Inventario_model->obtenerMateriales();
      $this->load->view('header');
      $this->load->view('viewInventario', $data);
      $this->load->view('footer');
    }
    public function delMaterial($ID_Material) {
      $this->Inventario_model->borrarMaterial($ID_Material);
      $data['inventario'] = $this->Inventario_model->obtenerMateriales();
      $this->load->view('header');
      $this->load->view('viewInventario', $data);
      $this->load->view('footer');
      }


  }
?>
