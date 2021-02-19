<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct(){

    parent::__construct();

    if($this->session->UID == "")
    {
        redirect(base_url('index.php/login'));
    }

    $this->load->model('UserModel','UserModel');
    $this->load->library('form_validation');
    $this->load->helper('form');

  }

  public function index(){

    $this->load->view('user/add_user');

  }

  public function view_user(){
    $data["user_list"] = $this->db->get('User')->result_array();
		$this->load->vars($data);
    $this->load->view('user/view_user');
  }

  public function save_user(){    

    $this->form_validation->set_rules('user_title', 'User Title', 'required');
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|min_length[10]');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('user_group', 'User Group', 'required');
    $this->form_validation->set_rules('user_name', 'User Name', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{

      if($this->input->post('active') == 'on'){
				$active = 1;
			}else{
				$active = 0;
			}

          $data =  array('user_title' => $this->input->post('user_title'),
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
              'phone_number' => $this->input->post('phone_number'),
              'email' => $this->input->post('email'),
              'user_group' => $this->input->post('user_group'),
              'user_name' => $this->input->post('user_name'),
              'password' => SHA1($this->input->post('password')),
              'create_date' => date('Y-m-d H:i:s'),
              'create_user' => $this->session->userdata('UID'),
              'active' => $active,
              );

              http_response_code(200);
              echo json_encode(['success' => ['msg' => "User created successfully"]]);

          $this->UserModel->save_user($data);

        }

  }

  public function update_user(){

    $id = $this->input->post('user_id');


    if(!isset($id) ||(!is_numeric($id) )){
      $data["error"] = "Patient is not found";
      $this->load->vars($data);
      $this->load->view('error/error_message');
      return;
    }

    $this->form_validation->set_rules('user_title', 'Title', 'required');
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|min_length[10]');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('user_group', 'User Group', 'required');
    $this->form_validation->set_rules('user_name', 'User Name', 'required');

    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{

      if($this->input->post('active') == 'on'){
        $active = 1;
      }else{
        $active = 0;
      }

    
           $data =  array('user_title' => $this->input->post('user_title'),
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
              'phone_number' => $this->input->post('phone_number'),
              'email' => $this->input->post('email'),
              'user_group' => $this->input->post('user_group'),
              'user_name' => $this->input->post('user_name'),           
              'active' => $active,
              );

              http_response_code(200);
              echo json_encode(['success' => ['msg' => "User created successfully"]]);

          $this->UserModel->update_user($id,$data);
          
         

        }

  }

  public function delete_user(){
	    	$id = $this->input->post('id');
		    $this->load->model("UserModel");
		    $this->UserModel->delete_user($id);
	}

  public function edit_user($id){

    if(!isset($id) ||(!is_numeric($id) )){
      $data["error"] = "Patient is not found";
      $this->load->vars($data);
      $this->load->view('error/error_message');
      return;
    }

    $data["open_user"] = $this->db->get_where('User', array('id' => $id))->result_array();
    if(empty($data['open_user'])){
     $data["error"] = " User is not found";
     $this->load->vars($data);
     $this->load->view('errors/error_message');
     return;
   }
    $this->load->vars($data);
    $this->load->view('user/edit_user');     
       
  }


}





?>
