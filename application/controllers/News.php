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

	 }

//Save Drugs
	 public function add_news(){
	 	$data["category_list"] = $this->db->get('category')->result_array();
	 	$data["country_list"] = $this->db->get('country')->result_array();	
		$this->load->vars($data);
		$this->load->view('news/add_news');
	 }

	 public function save_news(){

 		$this->form_validation->set_rules('title', 'News Title', 'required');		
 		$this->form_validation->set_rules('content', 'News Content', 'required');
 		$this->form_validation->set_rules('type', 'News Type', 'required');
 		$this->form_validation->set_rules('category', 'News Category', 'required');
 		$this->form_validation->set_rules('country', 'News Country', 'required');

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

 					$data =  array('title' => $this->input->post('title'),
 							'content' => $this->input->post('content'),
 							'type' => $this->input->post('type'),
 							'category_id' => $this->input->post('category'),
 							'Country_id' => $this->input->post('country'),
 							'User_id' => $this->session->userdata('UID'),							
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
 							'User_id' => $this->session->userdata('UID'),							
 							'status' => $status,
 							);

							http_response_code(200);
							echo json_encode(['success' => ['msg' => "News updated successfully"]]);

					$this->NewsModel->update_news($id,$data);

				}
	}

	public function delete_drug(){
				$id = $this->input->post('id');
				$this->DrugModel->delete_drug($id);
	}

	 //Drug Dosage

	public function add_dosage()
	{
		$this->load->view('drug/add_dosage');
	}

	public function view_dosage(){
		$data["dosage_list"] = $this->DrugModel->get_dosage();
		$this->load->vars($data);
		$this->load->view('drug/view_dosage');
	}

	public function save_dosage(){

		$this->form_validation->set_rules('dosage', 'Dosage', 'required');
		$this->form_validation->set_rules('factor', 'Factor', 'required|numeric|greater_than[0]');

		if($this->form_validation->run() == FALSE){

				$errors = validation_errors();
				http_response_code(422);
        echo json_encode($this->form_validation->error_array());

		}else{

					$data =  array('dosage' => $this->input->post('dosage'),
							'factor' => $this->input->post('factor'),
							'create_date' => date('Y-m-d H:i:s'),
							'create_user' => $this->session->userdata('UID'),
							);

							http_response_code(200);
							echo json_encode(['success' => ['msg' => "Dosage created successfully"]]);

					$this->DrugModel->save_dosage($data);

				}

	}

	public function edit_dosage($id){

		$data = array();
		if(!isset($id) ||(!is_numeric($id) )){
			$data["error"] = "Dosage is not found";
			$this->load->vars($data);
			$this->load->view('errors/error_message');
			return;
		}

		$data["open_dosage"] = $this->db->get_where('Dosage', array('id' => $id))->result_array();
		if(empty($data['open_dosage'])){
			$data["error"] = " Dosage is not found";
			$this->load->vars($data);
			$this->load->view('errors/error_message');
			return;
		}
		$this->load->vars($data);
		$this->load->view('drug/edit_dosage');
	}

	public function update_dosage(){

		$id = $this->input->post('dosage_id');

		$this->form_validation->set_rules('dosage', 'Dosage', 'required');
		$this->form_validation->set_rules('factor', 'Factor', 'required|numeric||greater_than[0]');

		if($this->form_validation->run() == FALSE){

				$errors = validation_errors();
				http_response_code(422);
				echo json_encode($this->form_validation->error_array());

		}else{

					$data =  array('dosage' => $this->input->post('dosage'),
							'factor' => $this->input->post('factor'),
							'create_date' => date('Y-m-d H:i:s'),
							'create_user' => $this->session->userdata('UID'),
							);

							http_response_code(200);
							echo json_encode(['success' => ['msg' => "Dosage updated successfully"]]);

					$this->DrugModel->update_dosage($id,$data);

				}

	}

	public function delete_dosage(){
				$id = $this->input->post('id');
				$this->DrugModel->delete_dosage($id);
	}

//Drug Frequency

public function add_frequency()
{
	$this->load->view('drug/add_frequency');
}

public function view_frequency(){
	$data["frequency_list"] = $this->DrugModel->get_frequency();
	$this->load->vars($data);
	$this->load->view('drug/view_frequency');
}

public function save_frequency(){

	$this->form_validation->set_rules('frequency', 'Frequency', 'required');
	$this->form_validation->set_rules('factor', 'Factor', 'required|numeric|greater_than[0]');

	if($this->form_validation->run() == FALSE){

			$errors = validation_errors();
			http_response_code(422);
			echo json_encode($this->form_validation->error_array());

	}else{

				$data =  array('frequency' => $this->input->post('frequency'),
						'factor' => $this->input->post('factor'),
						'create_date' => date('Y-m-d H:i:s'),
						'create_user' => $this->session->userdata('UID'),
						);

						http_response_code(200);
						echo json_encode(['success' => ['msg' => "Frequency created successfully"]]);

				$this->DrugModel->save_frequency($data);

			}

}

public function edit_frequency($id){

	$data = array();
	if(!isset($id) ||(!is_numeric($id) )){
		$data["error"] = "Frequency is not found";
		$this->load->vars($data);
		$this->load->view('errors/error_message');
		return;
	}

	$data["open_frequency"] = $this->db->get_where('Frequency', array('id' => $id))->result_array();
	if(empty($data['open_frequency'])){
		$data["error"] = " Frequency is not found";
		$this->load->vars($data);
		$this->load->view('errors/error_message');
		return;
	}
	$this->load->vars($data);
	$this->load->view('drug/edit_frequency');
}

public function update_frequency(){

	$id = $this->input->post('frequency_id');

	$this->form_validation->set_rules('frequency', 'Frequency', 'required');
	$this->form_validation->set_rules('factor', 'Factor', 'required|numeric|greater_than[0]');

	if($this->form_validation->run() == FALSE){

			$errors = validation_errors();
			http_response_code(422);
			echo json_encode($this->form_validation->error_array());

	}else{

				$data =  array('frequency' => $this->input->post('frequency'),
						'factor' => $this->input->post('factor'),
						'create_date' => date('Y-m-d H:i:s'),
						'create_user' => $this->session->userdata('UID'),
						);

						http_response_code(200);
						echo json_encode(['success' => ['msg' => "Frequency updated successfully"]]);

				$this->DrugModel->update_frequency($id,$data);

			}

}

public function delete_frequency(){
			$id = $this->input->post('id');
			$this->DrugModel->delete_frequency($id);
}

//Drug Period

public function add_period()
{
	$this->load->view('drug/add_period');
}

public function view_period(){
	$data["period_list"] = $this->DrugModel->get_period();
	$this->load->vars($data);
	$this->load->view('drug/view_period');
}

public function save_period(){

	$this->form_validation->set_rules('period', 'Period', 'required');
	$this->form_validation->set_rules('factor', 'Factor', 'required|numeric|greater_than[0]');

	if($this->form_validation->run() == FALSE){

			$errors = validation_errors();
			http_response_code(422);
			echo json_encode($this->form_validation->error_array());

	}else{

				$data =  array('period' => $this->input->post('period'),
						'factor' => $this->input->post('factor'),
						'create_date' => date('Y-m-d H:i:s'),
						'create_user' => $this->session->userdata('UID'),
						);

						http_response_code(200);
						echo json_encode(['success' => ['msg' => "Drug Preiod created successfully"]]);

				$this->DrugModel->save_period($data);

			}

}

public function edit_period($id){

	$data = array();
	if(!isset($id) ||(!is_numeric($id) )){
		$data["error"] = "Period is not found";
		$this->load->vars($data);
		$this->load->view('errors/error_message');
		return;
	}

	$data["open_period"] = $this->db->get_where('Period', array('id' => $id))->result_array();
	if(empty($data['open_period'])){
		$data["error"] = " Period is not found";
		$this->load->vars($data);
		$this->load->view('errors/error_message');
		return;
	}
	$this->load->vars($data);
	$this->load->view('drug/edit_period');
}

public function update_period(){

	$id = $this->input->post('period_id');

	$this->form_validation->set_rules('period', 'Period', 'required');
	$this->form_validation->set_rules('factor', 'Factor', 'required|numeric|greater_than[0]');

	if($this->form_validation->run() == FALSE){

			$errors = validation_errors();
			http_response_code(422);
			echo json_encode($this->form_validation->error_array());

	}else{

				$data =  array('period' => $this->input->post('period'),
						'factor' => $this->input->post('factor'),
						'create_date' => date('Y-m-d H:i:s'),
						'create_user' => $this->session->userdata('UID'),
						);

						http_response_code(200);
						echo json_encode(['success' => ['msg' => "Drug period updated successfully"]]);

				$this->DrugModel->update_period($id,$data);

			}

}

public function delete_period(){
			$id = $this->input->post('id');
			$this->DrugModel->delete_period($id);
}

//Load Drugs for prescription
public function load_drugs(){
 $drugs = $this->DrugModel->load_drugs();
 echo json_encode($drugs);

}

//Load Dosage for prescription
public function load_dosage(){
 $dosage = $this->DrugModel->get_dosage();
 echo json_encode($dosage);

}

//Load Frequency for prescription
public function load_frequency(){
 $frequency = $this->DrugModel->get_frequency();
 echo json_encode($frequency);

}

//Load Period for prescription
public function load_period(){
 $period = $this->DrugModel->get_period();
 echo json_encode($period);

}

public function add_stock()
{
	$data["drug_list"] = $this->DrugModel->load_drugs();
	$this->load->vars($data);
	$this->load->view('drug/add_stock');
}

public function get_current_stock()
{
	$drug_id = $this->input->post('drug_id');

	$data = array();
	if(!isset($drug_id) ||(!is_numeric($drug_id) )){
		$data["error"] = "Drug is not found";
		$this->load->vars($data);
		$this->load->view('errors/error_message');
		return;
	}
	$stock = $this->DrugModel->get_drug_balance_stock($drug_id);
  echo json_encode($stock);


}

public function save_add_stock()
{

	$this->form_validation->set_rules('drug_id', 'Drug Name', 'required');
	$this->form_validation->set_rules('add_quantity', 'Add Stock', 'required|numeric|greater_than[0]');

	if($this->form_validation->run() == FALSE){

		$errors = validation_errors();
		http_response_code(422);
		echo json_encode($this->form_validation->error_array());

	}else{

			$drug_id = $this->input->post('drug_id');
			$data =  array('drug_id' => $drug_id,
					'quantity' => $this->input->post('add_quantity'),
					'operation' => "+",
					'create_date' => date('Y-m-d H:i:s'),
					'create_user' => $this->session->userdata('UID'),
					);

					$stock = $this->DrugModel->get_drug_balance_stock($drug_id);
					$total = $stock+$this->input->post('add_quantity');
					$data1 = array('id' => $drug_id,
							'stock' => $total,
							);

					http_response_code(200);
					echo json_encode(['success' => ['msg' => "Drug stock added successfully"]]);

			$this->DrugModel->save_stock($data);
			$this->DrugModel->update_stock($drug_id,$data1);

		}
}

public function save_remove_stock()
{

	$this->form_validation->set_rules('drug_id', 'Drug Name', 'required');
	$this->form_validation->set_rules('remove_quantity', 'Remove Stock', 'required|numeric|greater_than[0]');

if($this->form_validation->run() == FALSE){

		$errors = validation_errors();
		http_response_code(422);
		echo json_encode($this->form_validation->error_array());

}else{

			$drug_id = $this->input->post('drug_id');
			$data =  array('drug_id' => $drug_id,
					'quantity' => $this->input->post('remove_quantity'),
					'operation' => "-",
					'create_date' => date('Y-m-d H:i:s'),
					'create_user' => $this->session->userdata('UID'),
					);

					$stock = $this->DrugModel->get_drug_balance_stock($drug_id);
					$total = $stock-$this->input->post('remove_quantity');
					$data1 = array('id' => $drug_id,
							'stock' => $total,
							);

					http_response_code(200);
					echo json_encode(['success' => ['msg' => "Drug stock deducted successfully"]]);

			$this->DrugModel->save_stock($data);
			$this->DrugModel->update_stock($drug_id,$data1);

		}
}

}

?>
