<?php
class ServiceModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function save_service($data)
	{
		$this->db->insert('Services',$data);
		return true;
	}

	public function update_service($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('Services', $data);
		 return $result;
	}

	public function delete_service($id){
	  $this -> db -> where('id', $id);
	  $this -> db -> delete('Services');
	}

	// public function load_services(){

	// 	$this->db->order_by("service", "asc");
	// 	$this->db->where('active', 1);
	// 	$result = $this->db->get('Services')->result_array();
	// 	return $result;

	//  }
}
