<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $data['title']="Reintente";
     $this->load->view('login', $data);
   }
   else
   {

     //area privilegiada.
     //Go to private area
     //redirect('addproy', 'refresh');

     //switch 
      switch ($this->session->userdata('perfil')) {
			case '':
        $data['title']="sin perfil";
				$this->load->view('login',$data);
				break;
			case 'admin':
				redirect(base_url().'addproy');
				break;
			case '2':
				redirect(base_url().'addprov');
				break;
			case '3':
				redirect(base_url().'suscriptor');
				break;
			default:
				$data['title'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('login',$data);
				break;
		}

   }
 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'is_logued_in' 	=> 		TRUE,
         'id'             => $row->ID_User,
         'username'       => $row->Nombre_user,
         'perfil'         => $row->Nivel_Acceso
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Usuario o contraseña son invalidos');
     return false;
   }
 }
}
?>
