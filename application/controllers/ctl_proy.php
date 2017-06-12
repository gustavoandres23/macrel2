<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_proy extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Proyectos_model','',TRUE);
    $this->load->model('Clientes_model','',TRUE);
    $this->load->model('RecursosH_model', '',TRUE);

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
        $data['proyectos'] = $this->Proyectos_model->obtenerproyectos();
        $data['clientes'] = $this->Clientes_model->obtenerClientes();
        $data ['nombre'] = $this->session->userdata('nombre');

        $this->load->view('header');
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
      }

    }
    function supervisorVerProyectos() {

      if($this->session->userdata('logged_in') != TRUE)
      {
      redirect(base_url().'login');
      }
      else {
        $data['proyectos'] = $this->Proyectos_model->obtenerproyectos();
        $data['clientes'] = $this->Clientes_model->obtenerClientes();
        $data ['nombre'] = $this->session->userdata('nombre');

        $this->load->view('supervisor/header');
        $this->load->view('supervisor/dashboard', $data);
        $this->load->view('supervisor/footer');
      }

    }

    function addproy(){

      $this->form_validation->set_rules('nombre_proyecto', 'Nombre Proyecto', 'trim|required|xss_clean');
      $this->form_validation->set_rules('rut_cliente', 'Rut cliente', 'trim|required|xss_clean');
      $this->form_validation->set_rules('ubicacion', 'Ubicacion', 'trim|required|xss_clean');

      if($this->form_validation->run() == FALSE)
      {
        //Field validation failed.  User redirected to login page
        $data['clientes'] = $this->Clientes_model->obtenerClientes();
        $this->load->view('header');
        $this->load->view('addproy', $data);
        $this->load->view('footer');
      }
      else
      {
        $data = array(
        'proyecto'       =>   $this->input->post('nombre_proyecto'),
        'cliente'        =>   $this->input->post('rut_cliente'),
        'ubicacion'      =>   $this->input->post('ubicacion'),
        'estado'         =>   '1',
        'lista_manoObra' =>   $this->input->post('equipo'),
        'lista_material' =>   $this->input->post('lista_material'),
        'utilidad'       =>   $this->input->post('utilidad')
      );
      $this->Proyectos_model->insertarproyecto($data);
      $this->load->view('header');
      $this->load->view('dashboard');
      $this->load->view('footer');

      }
    }
    function getProyecto($ID_Proyecto){
      $obtenerFila = $this->Proyectos_model->obtenerProyecto($ID_Proyecto);
      if ($obtenerFila != FALSE) {
        foreach ($obtenerFila->result() as $row) {

          $nombre        =      $row->Nombre_Proyecto;
          $cliente       =      $row->ID_Cliente;
          $ubicacion     =      $row->Ubicacion;
          $estado        =      $row->Estado;
          $lista_mano    =      $row->Lista_Mano;
          $lista_mat     =      $row->Lista_Mat;
          $utilidad      =      $row->Utilidad;
        }
        $data = array(
          'id'                   =>    $ID_Proyecto,
          'nombre'               =>    $nombre,
          'cliente'              =>    $cliente,
          'ubicacion'            =>    $ubicacion,
          'estado'               =>    $estado,
          'lista_mano'           =>    $lista_mano,
          'lista_material'       =>    $lista_mat,
          'utilidad'             =>    $utilidad);
      }
      else
      {
        return FALSE;
      }
      $this->load->view('header');
      $data['clientes'] = $this->Clientes_model->obtenerClientes();
      $this->load->view('ediproy', $data);
      $this->load->view('footer');

    }
    function updProyecto($ID_Proyecto){
      $data = array(
        'Nombre_Proyecto'          =>   $this->input->post('nombre'),
        'ID_Cliente'         =>   $this->input->post('cliente'),
        'Ubicacion'       =>   $this->input->post('ubicacion'),
        'Estado'          =>   $this->input->post('estado'),
        'Utilidad'        =>   $this->input->post('utilidad')
      );
      $this->Proyectos_model->editarProyecto($ID_Proyecto, $data);
      $this->load->view('header');
      $data ['nombre'] = $this->session->userdata('nombre');
      $data['proyectos'] = $this->Proyectos_model->obtenerproyectos();
      $this->load->view('dashboard', $data);
      $this->load->view('footer');

    }
    }


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
