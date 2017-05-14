<?php
/**
 *
 */
class VerifyAddProv extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('insertProveedores_model','',TRUE);
  }


  function index(){

    $this->form_validation->set_rules('rut', 'Rut', 'trim|required|xss_clean');
    $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
    $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required|xss_clean');
    $this->form_validation->set_rules('fono', 'Fono', 'trim|required|xss_clean');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');

    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page

      $this->load->view('header');
      $this->load->view('addprov');
      $this->load->view('footer');

    }
    else
    {

      $data = array(
      'Rut'          =>   $this->input->post('rut'),
      'Nombre'       =>   $this->input->post('nombre'),
      'Direccion'    =>   $this->input->post('direccion'),
      'Fono'         =>   $this->input->post('fono'),
      'Email'        =>   $this->input->post('email')
    );
    $this->insertProveedores_model->insertarproveedor($data);
    $this->load->view('header');
    $this->load->view('addprov');
    $this->load->view('footer');




    }
  }
  }


/* public function index()
  {
    $data = array(
    'Rut'          =>   $this->input->post('rut'),
    'Nombre'       =>   $this->input->post('nombre'),
    'Direccion'    =>   $this->input->post('direccion'),
    'Fono'         =>   $this->input->post('fono'),
    'Email'        =>   $this->input->post('email')
  );

    $this->insertProveedores_model->insertarproveedor($data);
    $this->load->view('header');
    $this->load->view('addprov');
    $this->load->view('footer');



  }
*/


 ?>
