<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctl_cyd extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('Proyectos_model','',TRUE);
    $this->load->model('Proveedores_model','',TRUE);
    $this->load->model('Compras_model','',TRUE);


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

      if($this->session->userdata('logged_in') != TRUE || $this->session->userdata('perfil') != '2')
      {
      redirect(base_url().'login');
      }
      else {
        $data ['nombre'] = $this->session->userdata('nombre');
        $data['proveedores'] = $this->Proveedores_model->obtenerproveedores();
        $data['facturas'] = $this->Compras_model->obtenerFactura();
        $data['compras'] = $this->Compras_model->obtenerCompras();
        $this->load->view('compraydespacho/header');
        $this->load->view('compraydespacho/dashboard', $data);
        $this->load->view('compraydespacho/footer');
      }
    }
      function addfactura(){

        $this->form_validation->set_rules('num_factura', 'Numero de factura', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fecha', 'Fecha', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proveedor', 'Proveedor', 'trim|required|xss_clean');

        if($this->form_validation->run() == FALSE)
        {
          //Field validation failed.  User redirected to login page
          $data ['nombre'] = $this->session->userdata('nombre');
          $data['proveedores'] = $this->Proveedores_model->obtenerproveedores();
          $data['facturas'] = $this->Compras_model->obtenerFactura();
          $data['compras'] = $this->Compras_model->obtenerCompras();
          $this->load->view('compraydespacho/header');
          $this->load->view('compraydespacho/dashboard', $data);
          $this->load->view('compraydespacho/footer');
        }
        else
        {
          $data = array(
          'Num_Fact'     =>   $this->input->post('num_factura'),
          'Fecha'        =>   $this->input->post('fecha'),
          'Proveedor'    =>   $this->input->post('proveedor')
        );
        $this->Compras_model->insertarFactura($data);
        redirect(base_url().'ctl_cyd');

        }
      }
      function addMaterial(){

        $this->form_validation->set_rules('factura_seleccionada', 'Numero de factura', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nombre_material', 'Nombre de material', 'trim|required|xss_clean');
        $this->form_validation->set_rules('unidad_medida', 'Unidad de medida', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'trim|required|xss_clean');
        $this->form_validation->set_rules('precio_unitario', 'Precio unitario', 'trim|required|xss_clean');
        if($this->form_validation->run() == FALSE)
        {
          $data ['nombre'] = $this->session->userdata('nombre');
          $data['proveedores'] = $this->Proveedores_model->obtenerproveedores();
          $data['facturas'] = $this->Compras_model->obtenerFactura();
          $data['compras'] = $this->Compras_model->obtenerCompras();
          $this->load->view('compraydespacho/header');
          $this->load->view('compraydespacho/dashboard', $data);
          $this->load->view('compraydespacho/footer');
        }
        else {
          $cantidad = $this->input->post('cantidad');
          $precio_unitario = $this->input->post('precio_unitario');
          $VALORTOTAL= $cantidad * $precio_unitario;

          $data = array(
            'Num_Fact'        =>   $this->input->post('factura_seleccionada'),
            'Nombre_Material' =>   $this->input->post('nombre_material'),
            'Unidad_medida'   =>   $this->input->post('unidad_medida'),
            'Cantidad'        =>   $this->input->post('cantidad'),
            'Precio_Unitario' =>   $this->input->post('precio_unitario'),
            'Precio_Total'    =>   $VALORTOTAL
          );
          $this->Compras_model->insertarMaterial($data);
          redirect(base_url().'ctl_cyd');
        }


      }


    }




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
