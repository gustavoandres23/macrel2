<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_proy extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Proveedores_model','',TRUE);

  }



    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function index() {

      if($this->session->userdata('logged_in') != TRUE)
      {
      redirect(base_url().'login');
      }
      else {
      $this->load->view('header');
      $this->load->view('addproy');
      $this->load->view('footer');
      }

    }

    function addproy(){
      $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
      $this->form_validation->set_rules('rut', 'Rut', 'trim|required|xss_clean');
      $this->form_validation->set_rules('ubicacion', 'Ubicacion', 'trim|required|xss_clean');
      $this->form_validation->set_rules('fono', 'Fono', 'trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');

      if($this->form_validation->run() == FALSE)
      {
        //Field validation failed.  User redirected to login page
        $this->load->view('header');
        $this->load->view('addproy');
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
      $this->Proveedores_model->insertarproveedor($data);
      $this->load->view('header');
      $this->load->view('viewallprov');
      $this->load->view('footer');

      }
    }
    }


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
