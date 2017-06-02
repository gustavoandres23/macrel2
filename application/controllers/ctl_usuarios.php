<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_usuarios extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('user','',TRUE);
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
      $data['usuarios'] = $this->user->obtenerUsuarios();
      $this->load->view('viewUser', $data);
      $this->load->view('footer');
    }

    }
    function addUsuario()
    {
      $this->form_validation->set_rules('rut', 'Rut', 'trim|required|');
      $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
      $this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|xss_clean');
      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
      $this->form_validation->set_rules('nivelusuario', 'Nivel de Usuario', 'trim|required|xss_clean');


      if($this->form_validation->run() == FALSE){

        $this->load->view('header');
        $this->load->view('addusu');
        $this->load->view('footer');
      }
      else {
        $data = array(
          'RUT_User'        =>   $this->input->post('rut'),
          'Nombre'          =>   $this->input->post('nombre'),
          'Apellidos'       =>   $this->input->post('apellidos'),
          'Pass'            =>   $this->input->post('password'),
          'Nombre_User'     =>   $this->input->post('username'),
          //'Ultima_conexion' =>   date("Y-m-d"),
          'Nivel_Acceso'    =>   $this->input->post('nivelusuario'),
          'Email'           =>   $this->input->post('email')
        );
        $this->user->insertarUsuario($data);
        $this->load->view('header');
        $data['usuarios'] = $this->user->obtenerUsuarios();
        $this->load->view('viewUser', $data);
        $this->load->view('footer');


      }

  }
  function getUsuario($ID_User){
    $obtenerFila = $this->user->obtenerEnlace($ID_User);
    if ($obtenerFila != FALSE) {
      foreach ($obtenerFila->result() as $row) {

        $rut         =      $row->RUT_User;
        $nombre      =      $row->Nombre;
        $apellidos   =      $row->Apellidos;
        $password    =      $row->Pass;
        $username    =      $row->Nombre_User;
        $perfil      =      $row->Nivel_Acceso;
        $email       =      $row->Email;
      }

      $data = array(
        'id'          =>    $ID_User,
        'rut'         =>    $rut,
        'nombre'      =>    $nombre,
        'apellidos'   =>    $apellidos,
        'password'    =>    $password,
        'username'    =>    $username,
        'perfil'      =>    $perfil,
        'email'       =>    $email);
    }

    else
    {
      return FALSE;
    }
    $this->load->view('header');
    $this->load->view('editusu', $data);
    $this->load->view('footer');

  }
  function updUsuario($ID_User){
    $data = array(
      'RUT_User'        =>   $this->input->post('rut'),
      'Nombre'          =>   $this->input->post('nombre'),
      'Apellidos'       =>   $this->input->post('apellidos'),
      'Pass'            =>   $this->input->post('password'),
      'Nombre_User'     =>   $this->input->post('username'),
      'Nivel_Acceso'    =>   $this->input->post('nivelusuario'),
      'Email'           =>   $this->input->post('email')
    );
    $this->user->editarUsuario($ID_User, $data);
    $this->load->view('header');
    $data['usuarios'] = $this->user->obtenerUsuarios();
    $this->load->view('viewUser', $data);
    $this->load->view('footer');

  }
  public function delUsuario($ID_User) {
    $this->user->borrarUsuario($ID_User);
    $this->load->view('header');
    $data['usuarios'] = $this->user->obtenerUsuarios();
    $this->load->view('viewUser', $data);
    $this->load->view('footer');
    }
}
?>
