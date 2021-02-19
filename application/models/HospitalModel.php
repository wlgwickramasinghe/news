<?php
class HospitalModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

//Load Hospital Settings
	public function get_hospital_settings(){
	$dataset = array();
		$sql=" SELECT Hospital_settings.*,CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS user  FROM Hospital_settings,User";
			$sql .=" WHERE (Hospital_settings.create_user = User.id)" ;
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;

}

//Open Hospital Settings
	public function open_hospital_settings($id){

	$dataset = array();
		$sql=" SELECT Hospital_settings.*,CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS user  FROM Hospital_settings,User";
			$sql .=" WHERE (Hospital_settings.create_user = User.id) AND (Hospital_settings.id = '".$id."')" ;
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						$dataset = $Q->result_array();

				}
				$Q->free_result();
				return $dataset;

}

//Update Hospital Settings
public function update_hospital_settings($data,$id)
{
		$this->db->where('id', $id);
		$result = $this->db->update('Hospital_settings', $data);
		 return $result;
	}

}
