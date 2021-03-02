
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google_login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('google_login_model');
 }

 function login()
 {
  include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client = new Google_Client();

  $google_client->setClientId('500102870021-6ua867vijj9th7mqeiruggecrbm4drd7.apps.googleusercontent.com'); //Define your ClientID

  $google_client->setClientSecret('vQtKC7ta4a3VL2uvkbNdDQ9P'); //Define your Client Secret Key

  $google_client->setRedirectUri('http://127.0.0.1/DSMS/index.php/Google_login/login'); //Define your Redirect Uri

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
   $login_button = '<a href="'.$google_client->createAuthUrl().'" ><img src="'.base_url().'assets/sign-in-with-google.png" /></a>';
   $data['login_button'] = $login_button;
   $this->load->view('google_login', $data);
   // $this->load->view('google_login', $data);
  }
  else
  {
   $this->load->view('google_login');
  }
 }

 function logout()
 {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect("http://127.0.0.1/DSMS/index.php/google_login/login");
 }
 
}
?>