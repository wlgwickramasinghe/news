<?php
class AdvertismentModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	//Save Country
	public function save_advertisment($data){
		$this->db->insert('ad_master',$data);
		return true;
	}
	//Update Country
	public function update_advertisment($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('ad_master', $data);
		 return $result;
	}
	
}
