<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctl_cotizaciones extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Cotizaciones_model','',TRUE);
  }

function addcotizacion(){

  $this->form_validation->set_rules('folio', 'Folio', 'trim|required|xss_clean');
  $this->form_validation->set_rules('material', 'Material', 'trim|required|xss_clean');
  $this->form_validation->set_rules('unidad', 'Unidad', 'trim|required|xss_clean');
  $this->form_validation->set_rules('cantidad', 'Cantidad', 'trim|required|xss_clean');

  if($this->form_validation->run() == FALSE)
  {
    $this->load->view('header');
    $this->load->view('addcotiz');
    $this->load->view('footer');
  }
  else
  {
    $Folio = $this->input->post('Folio');
    $data = array(
      'nfolio'             =>   $this->input->post('folio'),
      'material'           =>   $this->input->post('material'),
      'unidad'             =>   $this->input->post('unidad'),
      'cantidad'           =>   $this->input->post('cantidad')
    );

  $this->Cotizaciones_model->insertarMaterial($data);
  $Folio = $this->input->post('Folio');
  $data['materiales'] = $this->Cotizaciones_model->obtenerMateriales();
  $this->load->view('header');
  $this->load->view('addcotiz', $data);
  $this->load->view('footer');

  }
}
 function buscarFolio(){
    $Folio = $this->input->post('Folio');
    $data['materiales']= $this->Cotizaciones_model->buscarFolio($Folio);
    $this->load->view('header');
    $this->load->view('addcotiz', $data);
    $this->load->view('footer');
  }
}
