<?php
class PersistentModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function save_item($data)
	{
		$this->db->insert('Prescribe_items',$data);
		return true;
	}

	//Delete Prescribe item
	public function delete_item($id){

		  $this->db->where('id', $id);
		$this->db->delete('Prescribe_items');
	}

	//Send prescription to pharmacy
	public function send_to_pharmacy($pres_id){

		$this->db->set('status', 'Pending');
		$this->db->where('opd_prescription_id', $pres_id);
		$this->db->update('Prescribe_items');
		return true;
	}

	public function get_default($drug_id)
	{
		$res = $this->db->get_where('Drug', array('id' => $drug_id))->result_array();
		return $res;
	}

	
	public function get_drug_price($drug_id)
	{

		$sql=" SELECT Drug.id as drug_id,Drug_chargers.price,Drug_chargers.id as id";
        $sql .= " FROM Drug,Drug_chargers ";
		$sql .=" WHERE (Drug.id = Drug_chargers.drug_id ) AND (Drug.id = '".$drug_id."') AND (Drug_chargers.active = 'Yes') ORDER BY Drug_chargers.create_date DESC LIMIT 1" ;
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;

	}

	public function continue_all($data)
	{

		$this->db->insert('Prescribe_items',$data);
		return true;
	}

	public function update_quantity($pres_item_id,$save_data)
	{

		$this->db->where('id', $pres_item_id);
		$this->db->update('Prescribe_items', $save_data);
		return true;

	}

	public function update_opd_prescription($PRSID,$save_data)
	{
		$this->db->where('id', $PRSID);
		$this->db->update('Opd_prescription', $save_data);
		return true;
	}

//Update Lab order Results
	public function update_result($order_item_id,$save_data)
	{

		$this->db->where('id', $order_item_id);
		$this->db->update('Lab_order_items', $save_data);
		return true;

	}


	public function get_previouse_prescription($pres_id)
	{
		$dataset = array();
			$sql=" SELECT Prescribe_items.id as item_id,Prescribe_items.drug_id as drug_id,Opd_prescription.id as pres_id,Opd_prescription.status as status,Drug.name as drug,Dosage.id as dosage, Frequency.id as frequency, Period.id as period, Dosage.factor as dosage_factor, Frequency.factor as frequency_factor, Period.factor as period_factor, Drug.stock as stock, Drug_chargers.id as drug_chargers_id";
			$sql .= " FROM Prescribe_items,Opd_prescription,Drug,Dosage,Frequency,Period,Drug_chargers";
			$sql .=" WHERE   (Opd_prescription.id = Prescribe_items.opd_prescription_id) AND (Drug.id = Prescribe_items.drug_id) AND (Dosage.id = Prescribe_items.dosage_id) AND (Frequency.id = Prescribe_items.frequency_id) AND (Period.id = Prescribe_items.period_id) AND (Prescribe_items.drug_id = Drug_chargers.drug_id) AND ( Drug_chargers.active = 'Yes') AND (Prescribe_items.opd_prescription_id = '".$pres_id."')" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}



	public function load($id,$table)
	{

		if($table=='Prescribe_items'){

			$sql=" SELECT Prescribe_items.id as item_id,Prescribe_items.drug_id as drug_id,Opd_prescription.id as pres_id,Opd_prescription.status as status,Drug.name as drug,Drug.formulation as drug_formulation,Dosage.dosage as dosage, Frequency.frequency as frequency, Period.period as period, Dosage.factor as dosage_factor, Frequency.factor as frequency_factor, Period.factor as period_factor, Drug.stock as stock";
			$sql .= " FROM Prescribe_items,Opd_prescription,Drug,Dosage,Frequency,Period";
			$sql .=" WHERE   (Opd_prescription.id = Prescribe_items.opd_prescription_id) AND (Drug.id = Prescribe_items.drug_id) AND (Dosage.id = Prescribe_items.dosage_id) AND (Frequency.id = Prescribe_items.frequency_id) AND (Period.id = Prescribe_items.period_id) AND (Prescribe_items.id = '".$id."')" ;

}elseif ($table=='Lab_order_items') {
	$sql=" SELECT Lab_order_items.id as item_id,Lab_test.name as name,Lab_test.ref_value as ref_value,Lab_order_items.test_value as res,Lab_test.default_value as def_val";
	$sql .= " FROM Lab_test,Lab_order_items";
	$sql .=" WHERE   (Lab_test.id = Lab_order_items.lab_test_id) AND (Lab_order_items.id = '".$id."')" ;
}
			$Q =  $this->db->query($sql);
			$row = $Q->row();
					if (isset($row)){

						return $row;

					}

					// $row->free_result();

	}


}


 ?>
