<?php
class BillingModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	//Load Service Chargers
	public function get_service_chargers_list(){
	$dataset = array();
		$sql=" SELECT Service_chargers.*,CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS user ";
		$sql .= " FROM Service_chargers,User ";
		$sql .=" WHERE   (Service_chargers.create_user = User.id) " ;
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;

	}

	// 	//Load Service Chargers
	// public function get_service_chargers_list(){
	// $dataset = array();
	// 	$sql=" SELECT dental_treatment.*,CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS user ";
	// 	$sql .= " FROM dental_treatment,User ";
	// 	$sql .=" WHERE   (dental_treatment.create_user = User.id) " ;
	// 	$Q =  $this->db->query($sql);
	// 			if ($Q->num_rows() > 0){
	// 					foreach ($Q->result_array() as $row){
	// 							$dataset[] = $row;
	// 					}
	// 			}
	// 			$Q->free_result();
	// 			return $dataset;

	// }

	//Save Service Chargers
	public function save_service_charger($data)
	{
		$this->db->insert('Service_chargers',$data);
		return true;
	}

	//Load Drug Chargers
		public function get_drug_chargers_list(){
		$dataset = array();
			$sql=" SELECT Drug_chargers.*,Drug.name as drug,CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS user  ";
			$sql .= " FROM Drug_chargers,Drug,User ";
			$sql .=" WHERE (Drug_chargers.drug_id = Drug.id) AND (Drug_chargers.create_user = User.id)" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

		}

		//Save Drug Chargers
		public function save_drug_charger($data)
		{
			$this->db->insert('Drug_chargers',$data);
			return true;
		}		

		//Update drug chargers
		public function update_drug_charger($drug_id,$update_date){
			$this->db->where('drug_id', $drug_id);
			$result = $this->db->update('Drug_chargers', $update_date);
			 return $result;
		}
				
		//Save Payment
		public function save_payment($data)
		{
			$this->db->insert('Payment',$data);
			return true;
		}


}
