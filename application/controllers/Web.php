<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

  public function __construct(){
  parent::__construct();
  $this->load->helper('url'); 
  $this->load->helper('form');
  $this->load->library('session');
  $this->load->library('form_validation');
  $this->load->model('LoginModel','LoginModel');
  $this->load->model('UserModel','UserModel');
  $this->load->model('google_login_model','google_login_model');
  $this->load->model('WebModel','WebModel');
  $this->load->model('WebSinhalaModel','WebSinhalaModel');
  $this->load->model('WebTamilModel','WebTamilModel');
  $this->load->library('facebook');

  }

  // Load Homepage
  public function index(){
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();  
    $data["news_category1"] =  $this->WebModel->get_news_category1();
    $data["news_category2"] =  $this->WebModel->get_news_category2();
    $data["news_category3"] =  $this->WebModel->get_news_category3();
    $data["news_category4"] =  $this->WebModel->get_news_category4();
    $data["breaking_news"] =  $this->WebModel->get_breaking_news();
    $data["recent_news"] =  $this->WebModel->get_recent_news();
    $data["suggest_politics_news"] =  $this->WebModel->get_suggest_politics_news();
    $data["suggest_sport_news"] =  $this->WebModel->get_suggest_sport_news();
    $data["suggest_world_news"] =  $this->WebModel->get_suggest_world_news();
     $data["suggest_world_news_small"] =  $this->WebModel->get_suggest_world_news_small();

    $this->load->vars($data);
    $this->load->view('web/index');

  }

   // Load Homepage
  public function Sinhala(){
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A', ))->result_array();  
    $data["news_category1"] =  $this->WebSinhalaModel->get_news_category1();
    $data["news_category2"] =  $this->WebSinhalaModel->get_news_category2();
    $data["news_category3"] =  $this->WebSinhalaModel->get_news_category3();
    $data["news_category4"] =  $this->WebSinhalaModel->get_news_category4();
    $data["breaking_news"] =  $this->WebSinhalaModel->get_breaking_news();
    $data["recent_news"] =  $this->WebSinhalaModel->get_recent_news();
    $data["suggest_politics_news"] =  $this->WebSinhalaModel->get_suggest_politics_news();
    $data["suggest_sport_news"] =  $this->WebSinhalaModel->get_suggest_sport_news();
    $data["suggest_world_news"] =  $this->WebSinhalaModel->get_suggest_world_news();
     $data["suggest_world_news_small"] =  $this->WebSinhalaModel->get_suggest_world_news_small();

    $this->load->vars($data);
    $this->load->view('web/index');

  }

   public function Tamil(){
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();  
    $data["news_category1"] =  $this->WebTamilModel->get_news_category1();
    $data["news_category2"] =  $this->WebTamilModel->get_news_category2();
    $data["news_category3"] =  $this->WebTamilModel->get_news_category3();
    $data["news_category4"] =  $this->WebTamilModel->get_news_category4();
    $data["breaking_news"] =  $this->WebTamilModel->get_breaking_news();
    $data["recent_news"] =  $this->WebTamilModel->get_recent_news();
    $data["suggest_politics_news"] =  $this->WebTamilModel->get_suggest_politics_news();
    $data["suggest_sport_news"] =  $this->WebTamilModel->get_suggest_sport_news();
    $data["suggest_world_news"] =  $this->WebTamilModel->get_suggest_world_news();
     $data["suggest_world_news_small"] =  $this->WebTamilModel->get_suggest_world_news_small();

    $this->load->vars($data);
    $this->load->view('web/index');

  }


  public function category(){

     $id = $this->uri->segment(3);  
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();   
     $data["category_news"] = $this->db->get_where('news', array('status' => 'A' , 'category_id' => $id ,'language' => 'English' ))->result_array();   

    $this->load->vars($data);
    $this->load->view('web/category');

  }

  public function sinhala_category(){

     $id = $this->uri->segment(3);  
       
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();   
     $data["category_news"] = $this->db->get_where('news', array('status' => 'A' , 'category_id' => $id ,'language' => 'sinhala' ))->result_array();   

    $this->load->vars($data);
    $this->load->view('web/category');

  }

    public function tamil_category(){

     $id = $this->uri->segment(3);  
       
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();   
     $data["category_news"] = $this->db->get_where('news', array('status' => 'A' , 'category_id' => $id ,'language' => 'tamil' ))->result_array();   

    $this->load->vars($data);
    $this->load->view('web/category');

  }

  public function sinhala_single(){

    $id = $this->uri->segment(3);
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();
    $data["news_content"] = $this->WebModel->get_single_news($id);
    $data["recent_comment"] = $this->db->limit(3)->order_by('id', 'DESC')->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array(); 
    $data["comment_content"] = $this->db->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array();    
    $this->load->vars($data);
    $this->load->view('web/single');

  }

   public function tamil_single(){

    $id = $this->uri->segment(3);
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();
    $data["news_content"] = $this->WebModel->get_single_news($id);
    $data["recent_comment"] = $this->db->limit(3)->order_by('id', 'DESC')->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array(); 
    $data["comment_content"] = $this->db->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array();    
    $this->load->vars($data);
    $this->load->view('web/single');

  }

    public function single(){

      include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client = new Google_Client();

  $google_client->setClientId('500102870021-6ua867vijj9th7mqeiruggecrbm4drd7.apps.googleusercontent.com'); //Define your ClientID

  $google_client->setClientSecret('vQtKC7ta4a3VL2uvkbNdDQ9P'); //Define your Client Secret Key

  $google_client->setRedirectUri('http://127.0.0.1/DSMS/index.php/web/single/'); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

  if(isset($_GET["code"]))
  {
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    $current_datetime = date('Y-m-d H:i:s');

    if($this->google_login_model->Is_already_register($data['id']))
    {
     //update data
     $user_data = array(
      'fname' => $data['given_name'],
      'lname'  => $data['family_name'],
      'email' => $data['email'],
      'profile_pic'=> $data['picture'],
      'created_time' => $current_datetime
     );

     $this->google_login_model->Update_user_data($user_data, $data['id']);
    }
    else
    {
     //insert data
     $user_data = array(
      'login_id' => $data['id'],
      'fname'  => $data['given_name'],
      'lname'   => $data['family_name'],
      'email'  => $data['email'],
      'profile_pic' => $data['picture'],
      'created_time'  => $current_datetime
     );

     $this->google_login_model->Insert_user_data($user_data);
    }
    $this->session->set_userdata('user_data', $user_data);
   }
  }
  $login_button = '';
  if(!$this->session->userdata('access_token'))
  {
   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/sign-in-with-google.png" /></a>';
   $data['login_button'] = $login_button;   
  
   $id = $this->uri->segment(3);
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();
    $data["news_content"] = $this->WebModel->get_single_news($id);
    $data["recent_comment"] = $this->db->limit(3)->order_by('id', 'DESC')->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array(); 
    $data["comment_content"] = $this->db->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array();    
    $this->load->vars($data);
    $this->load->view('web/single');

  }
   else
  {
     $id = $this->uri->segment(3);
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();
    $data["news_content"] = $this->WebModel->get_single_news($id);
    $data["recent_comment"] = $this->db->limit(3)->order_by('id', 'DESC')->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array(); 
    $data["comment_content"] = $this->db->get_where('comment', array('status' => 'A' , 'news_id' => $id ))->result_array();    
    $this->load->vars($data);
   $this->load->view('web/single');
  }
  
 }

     // View Web Patient Histor

  // Logout Web User  
  public function logout(){

  $this->session->unset_userdata('Web_UID');

  $this->session->unset_userdata('Web_FullName');

   $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect("http://127.0.0.1/DSMS/index.php/web/login");

  }  

  public function contactus(){
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
    $this->load->vars($data);
    $this->load->view('web/contactus');

  }

  public function aboutus(){
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
    $this->load->vars($data);
    $this->load->view('web/aboutus');

  }

    public function videos(){
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
    $this->load->vars($data);
    $this->load->view('web/videos');

  }

  //  public function login(){
    
  //   $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
  //   $this->load->vars($data);
  //   $this->load->view('web/login');

  // }

  public function banner(){

    include_once APPPATH . "libraries/vendor/autoload.php";


      $google_client = new Google_Client();

      $google_client->setClientId('500102870021-6ua867vijj9th7mqeiruggecrbm4drd7.apps.googleusercontent.com'); //Define your ClientID

  $google_client->setClientSecret('vQtKC7ta4a3VL2uvkbNdDQ9P'); //Define your Client Secret Key

  $google_client->setRedirectUri('http://127.0.0.1/DSMS/index.php/web/banner'); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

      if(isset($_GET["code"]))
  {
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    $current_datetime = date('Y-m-d H:i:s');

    if($this->google_login_model->Is_already_register($data['id']))
    {
     //update data
     $user_data = array(
      'fname' => $data['given_name'],
      'lname'  => $data['family_name'],
      'email' => $data['email'],
      'profile_pic'=> $data['picture'],
      'created_time' => $current_datetime
     );

     $this->google_login_model->Update_user_data($user_data, $data['id']);
    }
    else
    {
     //insert data
     $user_data = array(
      'login_id' => $data['id'],
      'fname'  => $data['given_name'],
      'lname'   => $data['family_name'],
      'email'  => $data['email'],
      'profile_pic' => $data['picture'],
      'created_time'  => $current_datetime
     );

     $this->google_login_model->Insert_user_data($user_data);
    }
    $this->session->set_userdata('user_data', $user_data);
   }
  }
    $data1["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
    $this->load->vars($data1);
    $this->load->view('web/adForm');
  }

 

   function login() {
    
  include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client = new Google_Client();

  $google_client->setClientId('500102870021-6ua867vijj9th7mqeiruggecrbm4drd7.apps.googleusercontent.com'); //Define your ClientID

  $google_client->setClientSecret('vQtKC7ta4a3VL2uvkbNdDQ9P'); //Define your Client Secret Key

  $google_client->setRedirectUri('http://127.0.0.1/DSMS/index.php/web/banner'); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

  if(isset($_GET["code"]))
  {
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"]))
   {
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token', $token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    $current_datetime = date('Y-m-d H:i:s');

    if($this->google_login_model->Is_already_register($data['id']))
    {
     //update data
     $user_data = array(
      'fname' => $data['given_name'],
      'lname'  => $data['family_name'],
      'email' => $data['email'],
      'profile_pic'=> $data['picture'],
      'created_time' => $current_datetime
     );

     $this->google_login_model->Update_user_data($user_data, $data['id']);
    }
    else
    {
     //insert data
     $user_data = array(
      'login_id' => $data['id'],
      'fname'  => $data['given_name'],
      'lname'   => $data['family_name'],
      'email'  => $data['email'],
      'profile_pic' => $data['picture'],
      'created_time'  => $current_datetime
     );

     $this->google_login_model->Insert_user_data($user_data);
    }
    $this->session->set_userdata('user_data', $user_data);
    $this->session->set_userdata('Web_FullName',$user_data['fname']);
    $this->session->set_userdata('Web_UID',$user_data['login_id']);
    
   }
  }
  $login_button = '';
  if(!$this->session->userdata('access_token'))
  {
   $login_button = '<a href="'.$google_client->createAuthUrl().'" class="google btn" style="color:white;"><i class="fa fa-google fa-fw"></i> Login with Google</a>';
   $data['login_button'] = $login_button;
   $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
   // $this->load->vars($data);
   $this->load->view('web/login', $data);
   // $this->load->view('google_login', $data);
  }
  else
  {    
    
    $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
    // $this->load->vars($data);
    $this->load->view('web/adForm', $data);

  }
 }

 public function google_logout() {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect("http://127.0.0.1/DSMS/index.php/web/login");
 }

 public function fb_login(){
 
  $this->load->library('facebook');
  if ($this->facebook->is_authenticated())
    {
      // User logged in, get user details
      $user = $this->facebook->request('get', '/me?fields=id,name,email');
      if (!isset($user['error']))
      {
        $data['user'] = $user;
      }

    }
    else {
      $this->load->view('web/login');
    }

 }

 public function signup(){
   $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
    $this->load->vars($data);
    $this->load->view('web/signup');
 }

 public function web_signup(){

    $this->form_validation->set_rules('fname', 'User Title', 'required');
    $this->form_validation->set_rules('lname', 'First Name', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('pwd', 'Password', 'required');
    $this->form_validation->set_rules('con_pwd', 'Confirm Password', 'required|matches[pwd]');

    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{

          $data =  array('fname' => $this->input->post('fname'),
              'lname' => $this->input->post('lname'),
              'email' => $this->input->post('email'),
              'pwd' => SHA1($this->input->post('password')),
              'created_time' => date('Y-m-d H:i:s'),
              );

              http_response_code(200);
              echo json_encode(['success' => ['msg' => "User created successfully"]]);

          $this->WebModel->save_webuser($data);

        }

 }

 public function login_process(){

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pwd', 'Password', 'required');

    if($this->form_validation->run() == FALSE){

        $errors = validation_errors();
        http_response_code(422);
        echo json_encode($this->form_validation->error_array());

    }else{

       $email = trim($this->input->post('email'));
       $pwd = trim($this->input->post('password'));

       $data['web_user_info'] = $this->WebModel->do_auth_web($email,$pwd);
       // $data['hospital_info'] = $this->LoginModel->hospital_info();

       if(isset($data['web_user_info'])){

if (isset($data['web_user_info']['id'])&&($data['web_user_info']['id'] > 0)) {

$this->session->set_userdata('Web_UID', $data['web_user_info']['id']);
$this->session->set_userdata('Web_FullName', $data['web_user_info']['fname']." ".$data['web_user_info']['lname']);
// $this->session->set_userdata('FullName', $data['user_info']['user_title']." ".$data['user_info']['first_name']." ".$data['user_info']['last_name']);
// $this->session->set_userdata('VisitorName', $data['user_info']['user_title']." ".$data['user_info']['first_name']." ".$data['user_info']['last_name']);
// $this->session->set_userdata('FirstName', $data['user_info']['user_title']." ".$data['user_info']['first_name']);
$this->session->set_userdata('UserGroup', $data['web_user_info']['email']);
http_response_code(200);
echo json_encode($data['web_user_info']['email']);
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

 public function create_ad(){

    $image =  $this->input->post('id'); 

    $this->form_validation->set_rules('category', 'Category', 'required');   
    $this->form_validation->set_rules('bannerradio', 'Ads size', 'required');
    $this->form_validation->set_rules('strat_date', 'Start Date', 'required');
    $this->form_validation->set_rules('end_date', 'End Date', 'required');
    $this->form_validation->set_rules('duration', 'Duration', 'required');
    $this->form_validation->set_rules('price', 'Price', 'required');

    if($this->form_validation->run() == FALSE){       

        $errors = validation_errors();
        http_response_code(422);
         echo json_encode($this->form_validation->error_array());

    }else{

          if($this->input->post('status') == 'on'){
            $status = 'A';
          }else{
            $status = 'I';
          }

           $image =  $this->input->post('id');     

            if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = 'assets/news/images/banners';  
                $config['allowed_types'] = 'jpg';
                $config['file_name'] = $image ;
                $config['overwrite'] = TRUE;
                $this->load->library('upload', $config);  
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  
                }  
           }

          $data =  array('category_id' => $this->input->post('category'),
              'ad_master_id' => $this->input->post('bannerradio'),
              'startdate' => $this->input->post('strat_date'),
              'enddate' => $this->input->post('end_date'),
              'Country_id' => $this->input->post('duration'),
              'price' => $this->input->post('price'),
              'user_id' => $this->session->userdata('UID'), 
              'image' => $image,            
              'status' => $status,
              );

              http_response_code(200);
              echo json_encode(['success' => ['msg' => "Ads created successfully"]]);

          $this->WebModel->save_create_ad($data);

        }
 }


}

?>
