<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->library('session');
  $this->load->library('form_validation');
  $this->load->model('LoginModel','LoginModel');
  

  }

// Load Login View
  public function index(){

    $this->load->view('login');

  }

// Check Login Details
  public function process(){

    $this->form_validation->set_rules('username', 'User Name', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{

       $username = trim($this->input->post('username'));
       $password = trim($this->input->post('password'));

       $data['user_info'] = $this->LoginModel->do_auth($username,$password);
       // $data['hospital_info'] = $this->LoginModel->hospital_info();

       if(isset($data['user_info'])){

                   if (isset($data['user_info']['id'])&&($data['user_info']['id'] > 0)) {

                       $this->session->set_userdata('UID', $data['user_info']['id']);
       				         // $this->session->set_userdata('FullName', $data['user_info']['user_title']." ".$data['user_info']['first_name']." ".$data['user_info']['last_name']);
                       // $this->session->set_userdata('FullName', $data['user_info']['user_title']." ".$data['user_info']['first_name']." ".$data['user_info']['last_name']);
                       // $this->session->set_userdata('VisitorName', $data['user_info']['user_title']." ".$data['user_info']['first_name']." ".$data['user_info']['last_name']);
                       // $this->session->set_userdata('FirstName', $data['user_info']['user_title']." ".$data['user_info']['first_name']);
       				         $this->session->set_userdata('UserGroup', $data['user_info']['group']);
       				         // $this->session->set_userdata('HospitaName', $data['hospital_info']['name']);
       				         // $this->session->set_userdata('HospitaCode', $data['hospital_info']['code']);
       				         // $this->session->set_userdata('HospitaAddress', $data['hospital_info']['address']);
       				         // $this->session->set_userdata('HospitaContact', $data['hospital_info']['contact']);
                       http_response_code(200);
                       echo json_encode($data['user_info']['group']);
       				         // redirect(site_url('index.php/dashboard'), '200');

       			}
       			else{

       				$new_page = base_url()."index.php/login?err=InValid";
       				header("Location: ".$new_page);
              http_response_code(422);
              $error [] = 'Check your credentials';
              echo json_encode($error);
       			}
       		}
        }

  }

// Logout from system
  public function logout(){

    unset($_SESSION);
        $this->session->sess_destroy();
		session_destroy();
        $new_page   =   base_url()."index.php";
		header("Location:".$new_page);

  }

 

}

?>
