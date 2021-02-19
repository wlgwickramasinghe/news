<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

  function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->library('session');
  $this->load->library('form_validation');
  $this->load->model('LoginModel','LoginModel');
  $this->load->model('AppointmentModel','AppointmentModel');
  $this->load->model('ServiceModel','ServiceModel');
  $this->load->model('UserModel','UserModel');
  $this->load->model('PatientModel','PatientModel');
  $this->load->model('HolidayModel','HolidayModel');
  $this->load->model('DurationModel','DurationModel');

  }



  // Load Homepage
  public function index(){
    
    $data["category_list"] = $this->db->get('category')->result_array();      
    $this->load->vars($data);
    $this->load->view('web/index');

  }

  // Load Services 
  public function services(){

    $this->load->view('web/services');

  }

  // Load Contact
  public function contact(){

    $this->load->view('web/contact');

  }

    // Save Web Patient
    public function save_patient(){

    $this->form_validation->set_rules('name', 'Patient Name', 'required');
    $this->form_validation->set_rules('birthday', 'Date of Birth', 'required');
    $this->form_validation->set_rules('contact', 'Contact Number', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');    
    
    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{


          $data =  array('name' => $this->input->post('name'),
              'birthday' => $this->input->post('birthday'),
              'gender' => $this->input->post('gender'),
              'address' => $this->input->post('address'),
              'contact' => $this->input->post('contact'),
              'blood' => $this->input->post('blood'),
              // 'remarks' => $this->input->post('remarks'),
              'createDate' => date('Y-m-d H:i:s'),
              'createUser' => $this->session->userdata('UID'),
              'active' => 1,
              );

              http_response_code(200);
              // echo json_encode(['success' => ['msg' => "Patient created successfully"]]);

          $patient_id = $this->PatientModel->save_patient($data);
          echo json_encode($patient_id);
         
        }
  }

  // Load Profile 
  public function profile(){

    $UID = $this->session->UID;

     $data["webuser_profile"] = $this->db->get_where('User', array('id' => $UID))->result_array();
    $this->load->vars($data); 
    $this->load->view('web/profile');
    // print_r($data);die;

  }

  // Edit Web User
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
    // $this->load->view('user/edit_user');
        // $this->load->view('web/edit_user');
        // return;

        // print_r($data["open_user"]); die;
  }

  // Load About
  public function about(){

    $this->load->view('web/about');

  }

  // Load Appointment
  public function appointment(){

    $this->load->view('web/appointment');
  }

  // Load Login
  public function web_login(){

    $this->load->view('web/web_login');
  }

  // Load web appointment   
  public function load_appointment(){
      
    $UID = $this->session->UID;    
 
    $data["webuser_appointment"] = $this->AppointmentModel->get_appointment_info();    

    $data["webuser_patient"] = $this->db->get_where('Patient', array('createUser' => $UID))->result_array();   

    $data["service_list"] = $this->AppointmentModel->get_service();
    $data["time_list"] = $this->DurationModel->get_duration(); 

    $this->load->vars($data);   
    $this->load->view('web/appointment');    
  }

    // Edit Web Patient
    public function web_edit_patient(){

      $id = $this->input->post('id');
      // echo ($id);

    if(!isset($id) ||(!is_numeric($id) )){
      $data["error"] = "Patient is not found";
      $this->load->vars($data);
      $this->load->view('errors/error_message');
      return;
    }

    $data["open_web_patient"] = $this->db->get_where('Patient', array('id' => $id))->result_array();
    echo json_encode($data["open_web_patient"]);

  }

    // Edit Web Appointment
    public function web_edit_appointment(){
      
      $id = $this->input->post('id');
      // alert($id);

    $data = array();
    if(!isset($id) ||(!is_numeric($id) )){
      $data["error"] = "Appointment is not found";
      $this->load->vars($data);
      $this->load->view('errors/error_message');
      return;
    }

    $data["open_web_appointment"] = $this->db->get_where('appointment', array('id' => $id))->result_array();
      echo json_encode($data["open_web_appointment"]);
     
  }

   // Edit Web Appointment
    public function check_appointment(){
      
      $date = $this->input->post('dat');


    $data = array();
    if(!isset($date)){
      $data["error"] = "Appointment is not found";
      $this->load->vars($data);
      $this->load->view('errors/error_message');
      return;
    }

    $data["load_check_appointment"] = $this->db->get_where('appointment', array('date' => $date))->result_array();
    echo json_encode($data["load_check_appointment"]);
     
  }

    
      // Save Web Appointment
      public function save_appointment(){

        // $patient_id = $this->uri->segment(3);

    $this->form_validation->set_rules('service', 'Service', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('time', 'Time', 'required');
    // $this->form_validation->set_rules( $patient_id, 'Patient id', 'required');
    $this->form_validation->set_rules( 'patient_id', 'Patient id', 'required');

    if($this->form_validation->run() == FALSE){

      $errors = validation_errors();
      http_response_code(422);
          echo json_encode($this->form_validation->error_array());

    }else{

          
      $date = strtotime($this->input->post('date'));
      $dateformat = date('Y-m-d',$date);
      // $patient = '22';
      $data =  array
      (

      'service_type' => $this->input->post('service'),
      'date' => $dateformat,
      'time' => $this->input->post('time'),
      // 'patient_id' =>  $patient_id,           
       'patient_id' => $this->input->post('patient_id'),
      'create_date' => date('Y-m-d H:i:s'),
      'create_user' => $this->session->userdata('UID'),
      'active' => 1,
      );

      http_response_code(200);
      echo json_encode(['success' => ['msg' => "Appointment created successfully"]]);

  // print_r($data); die;
        $this->AppointmentModel->save_appointment($data);
        }

    }

    public function update_appointment(){
     
    $id = $this->input->post('appointment_id');

    $data = array();
    if(!isset($id) ||(!is_numeric($id) )){
      $data["error"] = "Appointment is not found";
      $this->load->vars($data);
      $this->load->view('error/error_message');
      return;
    }
    
    $this->form_validation->set_rules('service', 'Service', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('time', 'Time', 'required');
    $this->form_validation->set_rules('patient_id', 'Patient id', 'required');

    if($this->form_validation->run() == FALSE){

      $errors = validation_errors();
      http_response_code(422);
      echo json_encode($this->form_validation->error_array());

    }else{

      //   if($this->input->post('active') == 'on'){
      //   $active = 1;
      // }else{
      //   $active = 0;
      // }

          $date = strtotime($this->input->post('date'));
      $dateformat = date('Y-m-d',$date);

    $data = array('service_type' => $this->input->post('service'),
          'date' => $dateformat,
          // 'date' => $this->input->post('date'),
          'patient_id' => $this->input->post('patient_id'),
          'time' => $this->input->post('time'),           
          'create_date' => date('Y-m-d H:i:s'),
          'create_user' => $this->session->userdata('UID'),
          'active' => 1,
          );

        http_response_code(200);
        echo json_encode(['success' => ['msg' => "Appointment created successfully"]]);

      $this->AppointmentModel->update_appointment($id,$data);

        }
  }

   public function update_patient(){

    $id = $this->input->post('patient_uid'); 

    if(!isset($id) ||(!is_numeric($id) )){
      $data["error"] = "Patient is not found";
      $this->load->vars($data);
      $this->load->view('errors/error_message');
      return;
    }

    $this->form_validation->set_rules('name', 'Patient Name', 'required');
    $this->form_validation->set_rules('birthday', 'Date of Birth', 'required');
    $this->form_validation->set_rules('contact', 'Contact Number', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required'); 

    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{

          $data =  array('name' => $this->input->post('name'),
              'birthday' => $this->input->post('birthday'),
              'gender' => $this->input->post('gender'),
              'address' => $this->input->post('address'),
              'contact' => $this->input->post('contact'),
              'blood' => $this->input->post('blood'),
              'remarks' => $this->input->post('remarks'),
              'createDate' => date('Y-m-d H:i:s'),
              'createUser' => $this->session->userdata('UID'),
              'active' => 1,

              );

          // print_r($data); die;

              http_response_code(200);
              echo json_encode(['success' => ['msg' => "Patient Updated successfully"]]);

          $this->PatientModel->update_patient($id,$data);

        }
  }

   // View Web Patient History
    public function web_view_history(){

        // $this->load->model('PatientModel','PatientModel');
        //  $this->load->model('AppointmentModel','AppointmentModel');

        $id = $this->input->post('id');

      

         echo $id;

    

    $data["webpatient_history"] =  $this->PatientModel->get_patient_history($id);
    $this->load->vars($data); 
    $this->load->view('web/view_history');

   
      // echo ($id);

   

    // $data["webpatient_history"] = $this->db->get_where('appointment', array('patient_id' => $id))->result_array();
    // $this->load->vars($data); 
    // $this->load->view('web/view_history');

   

    // get_patient_history

    

  }

  // Logout Web User  
  public function logout(){

    unset($_SESSION);
        $this->session->sess_destroy();
    session_destroy();
        $new_page = base_url()."index.php/web/index?$page=Home";
    header("Location:".$new_page);

  }  

  // public function view_my_appointment(){

  //   // $data14["my_appointment_list"] = $this->db->get('appointment')->order_by($this->)result_array();

  //    // $data["my_appointment_list"] = $this->db->order_by('id','ASC');
  //   // $this->load->vars($data);
  //   // $this->load->view('web/appointment');
  // }


}

?>
