<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_supervisor extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Proyectos_model','',TRUE);

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
    public function index() {

      if($this->session->userdata('logged_in') != TRUE || $this->session->userdata('perfil') != '3')
      {
      redirect(base_url().'login');
      }
      else {
        $data ['nombre'] = $this->session->userdata('nombre');
        $data['proyectos'] = $this->Proyectos_model->obtenerproyectos();
        $this->load->view('supervisor/header');
        $this->load->view('supervisor/dashboard', $data);
        $this->load->view('supervisor/footer');
      }



    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
