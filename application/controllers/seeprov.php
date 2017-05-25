<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Seeprov extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Proveedores_model','',TRUE);
  }


    /** borrar mas adelante
     */
    public function index() {
        if($this->session->userdata('logged_in') != TRUE || $this->session->userdata('perfil') != 'admin')
        {
        redirect(base_url().'login');
        }
        else {
          $this->load->view('header');
          $data['proveedores'] = $this->Proveedores_model->obtenerproveedores();
          $this->load->view('viewallprov', $data);
          $this->load->view('footer');
        }
    }
    function deleteproveedor($proveedores){
      $this->Proveedores_model->borrarproveedor($proveedores);

    }




}
?>
