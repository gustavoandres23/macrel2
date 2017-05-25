<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Addprov extends CI_Controller {


    /**

     */
    public function index() {
        if($this->session->userdata('logged_in') != TRUE || $this->session->userdata('perfil') != 'admin')
        {
        redirect(base_url().'login');
        }
        else {
          $this->load->view('header');
          $this->load->view('addprov');
          $this->load->view('footer');
        }


    }



}
?>
