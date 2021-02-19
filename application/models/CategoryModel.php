<?php
class CategoryModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	//Save Country
	public function save_category($data){
		$this->db->insert('category',$data);
		return true;
	}
	//Update Country
	public function update_category($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('category', $data);
		 return $result;
	}
	
	//Drug Dosage
	public function save_dosage($data)
	{
		$this->db->insert('Dosage',$data);
		return true;
	}

	public function update_dosage($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('Dosage', $data);
		 return $result;
	}


	//Drug Frequency

	public function save_frequency($data)
	{
		$this->db->insert('Frequency',$data);
		return true;
	}

	public function update_frequency($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('Frequency', $data);
		 return $result;
	}


	//Drug Period

	public function save_period($data)
	{
		$this->db->insert('Period',$data);
		return true;
	}

	public function update_period($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('Period', $data);
		 return $result;
	}

	
	public function get_drug_list(){
	$dataset = array();
		$sql=" SELECT Drug.*,Dosage.dosage,Frequency.frequency,Period.period ";
		$sql .= " FROM Drug,Dosage,Frequency,Period ";
		$sql .=" WHERE   (Drug.default_dosage = Dosage.id) AND (Drug.default_frequency = Frequency.id) AND (Drug.default_period = Period.id) " ;
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;

}

	public function get_dosage(){
	$result = $this->db->get('Dosage')->result_array();
	return $result;
	}

	public function get_frequency(){
		$result = $this->db->get('Frequency')->result_array();
		return $result;
	}

	public function get_period(){
		$result = $this->db->get('Period')->result_array();
		return $result;
	}

	public function load_drugs(){
		$this->db->order_by("name", "asc");
		$this->db->where('active', 1);
		$result = $this->db->get('Drug')->result_array();
		return $result;
	}

	public function get_drug_balance_stock($drug_id)
	{

		$stock = $this->db->select('stock')
							 ->get_where('Drug', array('id' => $drug_id))
							 ->row()
							 ->stock;
	  return $stock;

 }

 public function deduct_drug_stock($drug_id ,$quantity)
 {
	 $this->db->where('id', $drug_id);
 	 $result = $this->db->update('Drug', $quantity);
 	 return $result;
 }

public function load($id)
{
	$result = $this->db->get_where('Drug', array('id' => $id))->result_array();
	return $result;

}

public function save_stock($data)
{
	$this->db->insert('Drug_stock',$data);
	return true;
}

public function update_stock($drug_id,$data){
	$this->db->where('id', $drug_id);
	$result = $this->db->update('Drug', $data);
	 return $result;
}
}
