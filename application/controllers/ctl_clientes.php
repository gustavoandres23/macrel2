<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_clientes extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Clientes_model','',TRUE);
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
      $data['clientes'] = $this->Clientes_model->obtenerClientes();
      $this->load->view('header');
      $this->load->view('viewClientes', $data);
      $this->load->view('footer');
    }
    }
    function addCliente()
    {
      $this->form_validation->set_rules('rut', 'Rut', 'trim|required|');
      $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
      $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required|xss_clean');
      $this->form_validation->set_rules('fono', 'Fono', 'trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');


      if($this->form_validation->run() == FALSE){

        $this->load->view('header');
        $this->load->view('addcliente');
        $this->load->view('footer');
      }
      else {
        $data = array(
          'Rut'             =>   $this->input->post('rut'),
          'Nombre'          =>   $this->input->post('nombre'),
          'Direccion'       =>   $this->input->post('direccion'),
          'Fono'            =>   $this->input->post('fono'),
          'Email'           =>   $this->input->post('email')
        );
        $this->Clientes_model->insertarCliente($data);
        $data['clientes'] = $this->Clientes_model->obtenerClientes();
        $this->load->view('header');
        $this->load->view('viewClientes', $data);
        $this->load->view('footer');

      }

  }
  function getCliente($Rut){
    $obtenerFila = $this->Clientes_model->obtenerCliente($Rut);
    if ($obtenerFila != FALSE) {
      foreach ($obtenerFila->result() as $row) {

        $rut         =      $row->Rut;
        $nombre      =      $row->Nombre;
        $direccion   =      $row->Direccion;
        $fono        =      $row->Fono;
        $email       =      $row->Email;
      }

      $data = array(
        'rut'         =>    $rut,
        'nombre'      =>    $nombre,
        'direccion'   =>    $direccion,
        'fono'        =>    $fono,
        'email'       =>    $email);
    }
    else
    {
      return FALSE;
    }
    $this->load->view('header');
    $this->load->view('ediclientes', $data);
    $this->load->view('footer');

  }
  function updCliente($rut){
    $data = array(
      'Rut'             =>   $this->input->post('rut'),
      'Nombre'          =>   $this->input->post('nombre'),
      'Direccion'       =>   $this->input->post('direccion'),
      'Fono'            =>   $this->input->post('fono'),
      'Email'           =>   $this->input->post('email')
    );
    $this->Clientes_model->editarCliente($rut, $data);
    $data['clientes'] = $this->Clientes_model->obtenerClientes();
    $this->load->view('header');
    $this->load->view('viewClientes', $data);
    $this->load->view('footer');

  }
  public function delCliente($rut) {
    $this->Clientes_model->borrarCliente($rut);
    $data['clientes'] = $this->Clientes_model->obtenerClientes();
    $this->load->view('header');
    $this->load->view('viewClientes', $data);
    $this->load->view('footer');
    }
  }
