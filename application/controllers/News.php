<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	 function __construct()
	 {
			 parent::__construct();

			 if($this->session->UID == "")
			 {
					 redirect(base_url('index.php/login'));
			 }

			 $this->load->model('NewsModel','NewsModel');
			 $this->load->library('form_validation');
			 $this->load->helper('form');
      		 $this->load->library('upload');

	 }

		//Save Drugs
	 public function add_news(){
	 	$data["load_id"] = $this->NewsModel->load_id();
	 	$data["category_list"] = $this->db->get('category')->result_array();
	 	$data["country_list"] = $this->db->get('country')->result_array();	
		$this->load->vars($data);
		$this->load->view('news/add_news');
	 }



	 public function save_news(){

	 	$image =  $this->input->post('id'); 

 		$this->form_validation->set_rules('title', 'News Title', 'required');		
 		$this->form_validation->set_rules('content', 'News Content', 'required');
 		$this->form_validation->set_rules('type', 'News Type', 'required');
 		$this->form_validation->set_rules('category', 'News Category', 'required');
 		$this->form_validation->set_rules('country', 'News Country', 'required');
 		$this->form_validation->set_rules('language', 'News Language', 'required');


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
                $config['upload_path'] = 'assets/news/images';  
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

 					$data =  array('title' => $this->input->post('title'),
 							'content' => $this->input->post('content'),
 							'type' => $this->input->post('type'),
 							'category_id' => $this->input->post('category'),
 							'Country_id' => $this->input->post('country'),
 							'language' => $this->input->post('language'),
 							'datetime' => date('Y-m-d H:i:s'),
 							'User_id' => $this->session->userdata('UID'),	
 							'image' => $image,						
 							'status' => $status,
 							);

 							http_response_code(200);
 							echo json_encode(['success' => ['msg' => "News created successfully"]]);

 					$this->NewsModel->save_news($data);

 				}

 	}

	public function view_news(){
		// $data["news_list"] = $this->db->get('news')->result_array();
		$data["news_list"] = $this->NewsModel->load_news();

		$this->load->vars($data);
		$this->load->view('news/view_news');
	}

	public function edit_news($id){

		$data = array();
		if(!isset($id) ||(!is_numeric($id) )){
			$data["error"] = "news not found";
			$this->load->vars($data);
			$this->load->view('errors/error_message');
			return;
		}

		// $data["edit_news"] = $this->db->get_where('news', array('id' => $id))->result_array();
		$data["edit_news"] = $this->NewsModel->get_news_info($id);
		$data["category_list"] = $this->db->get('category')->result_array();
	 	$data["country_list"] = $this->db->get('country')->result_array();	

		if(empty($data['edit_news'])){
			$data["error"] = " news not found";
			$this->load->vars($data);
			$this->load->view('errors/error_message');
			return;
		}
		$this->load->vars($data);
		$this->load->view('news/edit_news');
	}

	public function update_news(){

		$id = $this->input->post('news_id');

		$this->form_validation->set_rules('title', 'News Title', 'required');		
 		$this->form_validation->set_rules('content', 'News Content', 'required');
 		$this->form_validation->set_rules('type', 'News Type', 'required');
 		$this->form_validation->set_rules('category', 'News Category', 'required');
 		$this->form_validation->set_rules('country', 'News Country', 'required');
 		$this->form_validation->set_rules('language', 'News Language', 'required');

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

					$data = array('title' => $this->input->post('title'),
 							'content' => $this->input->post('content'),
 							'type' => $this->input->post('type'),
 							'category_id' => $this->input->post('category'),
 							'Country_id' => $this->input->post('country'),
 							'language' => $this->input->post('language'),
 							'datetime' => date('Y-m-d H:i:s'),
 							'User_id' => $this->session->userdata('UID'),							
 							'status' => $status,
 							);

							http_response_code(200);
							echo json_encode(['success' => ['msg' => "News updated successfully"]]);

					$this->NewsModel->update_news($id,$data);

				}
	}	

}

?>
