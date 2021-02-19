<?php
class ComplaintModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	//Group
	public function save_group($data)
	{
		$this->db->insert('Lab_test_group',$data);
		return true;
	}

	// Create an appointment
	public function save_complaint($data)
	{
		$this->db->insert('Complaints',$data);
		return true;
	}

	public function update_complaint($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('Complaints', $data);
		return $result;
	}

	public function delete_group($id){
	  $this->db->where('id', $id);
	  $this->db->delete('Lab_test_group');
	}

	// public function get_lab_test($id){

	// 	$dataset = array();
	// 		$sql=" SELECT Lab_test.*,Lab_test_group.group as groupl";
	// 		$sql .= " FROM Lab_test,Lab_test_group";
	// 		$sql .=" WHERE (Lab_test.lab_test_group_id = Lab_test_group.id) AND  Lab_test_group.id = '".$id."'";
	// 		$Q =  $this->db->query($sql);
	// 				if ($Q->num_rows() > 0){
	// 						foreach ($Q->result_array() as $row){
	// 								$dataset[] = $row;
	// 						}
	// 				}
	// 				$Q->free_result();
	// 				return $dataset;
	// }

	public function get_service(){
	$result = $this->db->get('Services')->result_array();
	return $result;
	}

	public function get_test_list(){
		$dataset = array();
			$sql=" SELECT appointment.*,Lab_test_group.group as groupl";
			// $sql .= " FROM Lab_test,Lab_test_group";
			// $sql .=" WHERE (Lab_test.lab_test_group_id = Lab_test_group.id) " ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}



	public function get_order_list()
	{
		$dataset = array();
			$sql=" SELECT Patient.id as pid,Lab_order.id as order_id,Patient.name,Lab_order.status,Lab_order.order_date,Lab_order.test_group_name as lgroup ";
			$sql .= " FROM Patient,Lab_order,Lab_test_group";
			$sql .=" WHERE   (Patient.id = Lab_order.patient_id) AND (Lab_order.test_group_name = Lab_test_group.group)" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	public function open_lab_order($order_id){

		$dataset = array();
			$sql=" SELECT Lab_order_items.id as item_id,Lab_test.name as name,Lab_test.ref_value as ref_value,Lab_order_items.test_value as res,Lab_test.default_value as def_val";
			$sql .= " FROM Lab_test,Lab_order_items";
			$sql .=" WHERE   (Lab_test.id = Lab_order_items.lab_test_id) AND (Lab_order_items.lab_order_id = '".$order_id."')" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	public function get_status($order_id)
	{
		$status = $this->db->select('status')
							 ->get_where('Lab_order', array('id' => $order_id))
							 ->row()
							 ->status;
							 return $status;
						 }

}
