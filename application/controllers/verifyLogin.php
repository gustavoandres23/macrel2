<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {

   $this->form_validation->set_rules('username', 'Username', 'trim|required|');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     $data['title']="Reintente";
     $this->load->view('login', $data);
   }
   else
   {
     $username = $this->input->post('username');
     $password = $this->input->post('password');

     //consulta base de datos
     $result = $this->user->login($username, $password);
     //arreglo asociativo de los datos para la sesion
     if($result == TRUE)
     {
          $user_data = array(
            'id_usuario'          => $result->ID_User,
            'nombre'              => $result->Nombre,
            'username'            => $result->Nombre_User,
            'perfil'              => $result->Nivel_Acceso,
            'logged_in'           => true
                    );

          $this->session->set_userdata($user_data);

          switch ($this->session->userdata('perfil'))
          {
    			case '':
    				$data['title'] = 'Sin Perfil';
    				$this->load->view('login',$data);
    				break;
            //Administrador
    			case '1':
    				redirect(base_url().'home');
    				break;
            //Compra y despacho
    			case '2':
    				redirect(base_url().'ctl_cyd');
    				break;
            //supervisor (obras)
    			case '3':
    				redirect(base_url().'ctl_supervisor');
    				break;
    			default:
    				$data['title'] = 'Login con roles de usuario en codeigniter';
    				$this->load->view('login',$data);
    				break;
        }
   }
 }
}
 function check_database($password)
 {
    $username =$this->input->post('username');
    $result = $this->user->login($username, $password);
    if($result == false){
      $this->form_validation->set_message('check_database', 'usuario o contraseña invalido');
      return false;
    }
    return TRUE;
 }
 function logout_ci()
	{
		$this->session->sess_destroy();
    redirect(base_url().'login');
  }
}

  ?>
