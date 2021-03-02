<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisment extends CI_Controller {

	 function __construct()
	 {
			 parent::__construct();

			 if($this->session->UID == "")
			 {
					 redirect(base_url('index.php/login'));
			 }

			 $this->load->model('AdvertismentModel','AdvertismentModel');
			 $this->load->library('form_validation');
			 $this->load->helper('form');

	 }

//Save Drugs
	 public function add_advertisment(){
		 $this->load->view('advertisment/add_advertisment');
	 }

	 public function save_advertisment(){

 		$this->form_validation->set_rules('advertisment', 'Advertisment Name', 'required');	
 		$this->form_validation->set_rules('width', 'Width', 'required');	
 		$this->form_validation->set_rules('height', 'Height', 'required');	
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

 					$data =  array('ad_name' => $this->input->post('advertisment'),
 							'width' => $this->input->post('width'),
 							'height' => $this->input->post('height'),
 							'price' => $this->input->post('price'),							
 							'status' => $status,
 							);

 							http_response_code(200);
 							echo json_encode(['success' => ['msg' => "advertisment created successfully"]]);

 					$this->AdvertismentModel->save_advertisment($data);

 				}

 	}

	public function view_advertisment(){
		$data["ad_list"] = $this->db->get('ad_master')->result_array();	
		$this->load->vars($data);
		$this->load->view('advertisment/view_advertisment');
	}

	public function edit_advertisment($id){

		$data = array();
		if(!isset($id) ||(!is_numeric($id) )){
			$data["error"] = "advertisment not found";
			$this->load->vars($data);
			$this->load->view('errors/error_message');
			return;
		}

		$data["edit_advertisment"] = $this->db->get_where('ad_master', array('id' => $id))->result_array();
		if(empty($data['edit_advertisment'])){
			$data["error"] = " advertisment not found";
			$this->load->vars($data);
			$this->load->view('errors/error_message');
			return;
		}
		$this->load->vars($data);
		$this->load->view('advertisment/edit_advertisment');
	}

	public function update_advertisment(){

		$id = $this->input->post('advertisment_id');

		$this->form_validation->set_rules('advertisment', 'advertisment Name', 'required');	
		$this->form_validation->set_rules('width', 'Width', 'required');	
 		$this->form_validation->set_rules('height', 'Height', 'required');	
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

					$data =  array('ad_name' => $this->input->post('advertisment'),	
							'width' => $this->input->post('width'),
 							'height' => $this->input->post('height'),
 							'price' => $this->input->post('price'),							
 							'status' => $status,
 							);

							http_response_code(200);
							echo json_encode(['success' => ['msg' => "advertisment updated successfully"]]);

					$this->AdvertismentModel->update_advertisment($id,$data);

				}
	}

	public function pending_advertisment(){
		$data["ad_list"] = $this->db->get('ad_master')->result_array();	
		$this->load->vars($data);
		 $this->load->view('advertisment/pending_advertisment');
	 }

	 public function approved_advertisment(){
	 	$data["ad_list"] = $this->db->get('ad_master')->result_array();	
		$this->load->vars($data);
		 $this->load->view('advertisment/approved_advertisment');
	 }	

}

?>
