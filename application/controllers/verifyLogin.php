<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
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
    			case 'admin':
    				redirect(base_url().'addprov');
    				break;
    			case 'supervisor':
    				redirect(base_url().'addproy');
    				break;
    			case 'suscriptor':
    				redirect(base_url().'suscriptor');
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
