<?php
class TreatmentModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	
	// Save Treatment
	public function save_treatment($data)
	{
		$this->db->insert('dental_treatment',$data);
		return true;
	}

	// Update Treatment
	public function update_treatment($id,$data)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('dental_treatment', $data);
		return $result;
	}

	// Load Services
	public function get_service()
	{
	$result = $this->db->get('Services')->result_array();
	return $result;
	}
		

}
