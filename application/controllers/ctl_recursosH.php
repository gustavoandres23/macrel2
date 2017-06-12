<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_recursosh extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('RecursosH_model','',TRUE);
  }

    /**

     */
    function index() {
    if($this->session->userdata('logged_in') != TRUE || $this->session->userdata('perfil') != '1')
    {
    $this->session->sess_destroy();
    redirect(base_url().'login');
    }
    else {
      $this->load->view('header');
      $data['recursosh'] = $this->RecursosH_model->obtenerRecursosH();
      $this->load->view('viewRecursosH', $data);
      $this->load->view('footer');
    }

    }
    function addRecursosH()
    {
      $this->form_validation->set_rules('rut', 'Rut', 'trim|required|xss_clean');
      $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
      $this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|xss_clean');
      $this->form_validation->set_rules('valor_hora', 'Valor Hora', 'trim|required|xss_clean');
      $this->form_validation->set_rules('detalle', 'Detalle', 'trim|required|xss_clean');


      if($this->form_validation->run() == FALSE){

        $this->load->view('header');
        $this->load->view('addrecursosh');
        $this->load->view('footer');
      }
      else {
        $data = array(
          'Rut'             =>   $this->input->post('rut'),
          'Nombre'          =>   $this->input->post('nombre'),
          'Apellidos'       =>   $this->input->post('apellidos'),
          'Valor_Hora'      =>   $this->input->post('valor_hora'),
          'Detalle'         =>   $this->input->post('detalle')
        );
        $this->RecursosH_model->insertarRecursosH($data);
        $this->load->view('header');
        $data['recursosh'] = $this->RecursosH_model->obtenerRecursosH();
        $this->load->view('viewRecursosH', $data);
        $this->load->view('footer');

      }
}
      function getTrabajador($RUT){
        $obtenerFila = $this->RecursosH_model->obtenerTrabajador($RUT);
        if ($obtenerFila != FALSE) {
          foreach ($obtenerFila->result() as $row) {
            $nombre      =      $row->Nombre;
            $apellidos   =      $row->Apellidos;
            $valor_hora  =      $row->Valor_Hora;
            $Detalle     =      $row->Detalle;
          }

          $data = array(
            'rut'         =>    $RUT,
            'nombre'      =>    $nombre,
            'apellidos'   =>    $apellidos,
            'valor_hora'  =>    $valor_hora,
            'detalle'     =>    $Detalle);
        }

        else
        {
          return FALSE;
        }
        $this->load->view('header');
        $this->load->view('edirecursoh', $data);
        $this->load->view('footer');

      }
      function getrecursoH($RUT){
        $obtenerFila = $this->RecursosH_model->obtenerTrabajador($RUT);
        if ($obtenerFila != FALSE) {
          foreach ($obtenerFila->result() as $row) {
            $nombre      =      $row->Nombre;
            $apellidos   =      $row->Apellidos;
            $valor_hora  =      $row->Valor_Hora;
            $Detalle     =      $row->Detalle;
          }

          $data = array(
            'rut'         =>    $RUT,
            'nombre'      =>    $nombre,
            'apellidos'   =>    $apellidos,
            'valor_hora'  =>    $valor_hora,
            'detalle'     =>    $Detalle);
        }

        else
        {
          return FALSE;
        }
        $this->load->view('header');
        $this->load->view('edirecursoh', $data);
        $this->load->view('footer');

      }



      function supVerRecursosH(){
      if($this->session->userdata('logged_in') != TRUE )
      {
      $this->session->sess_destroy();
      redirect(base_url().'login');
      }
      else {
        $this->load->view('supervisor/header');
        $data['recursosh'] = $this->RecursosH_model->obtenerRecursosH();
        $this->load->view('viewRecursosH', $data);
        $this->load->view('supervisor/footer');
      }

      }
      function viewListaMano(){
      if($this->session->userdata('logged_in') != TRUE )
      {
      $this->session->sess_destroy();
      redirect(base_url().'login');
      }
      else {
        $this->load->view('header');
        $data['lista_mano'] = $this->RecursosH_model->obtenerListaMano();
        $this->load->view('viewLista_mano', $data);
        $this->load->view('footer');
      }

      }
  }

?>
