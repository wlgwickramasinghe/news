<?php
class PharmacyModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function load_prescriptions(){

		$dataset = array();
			$sql=" SELECT Patient.id as pid,Opd_prescription.id as pres_id,Opd_prescription.opd_visit_id as visit_id,Patient.name,Opd_prescription.status,Opd_prescription.prescribe_date ";
			$sql .= " FROM Patient,Opd_prescription";
			$sql .=" WHERE   (Patient.id = Opd_prescription.patient_id) ORDER BY Opd_prescription.prescribe_date DESC" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	public function open_prescription($pres_id){

		$dataset = array();
			$sql=" SELECT Prescribe_items.id as item_id,Prescribe_items.drug_id as drug_id,Opd_prescription.id as pres_id,Opd_prescription.status as status,Drug.name as drug,Drug.formulation as drug_formulation,Dosage.dosage as dosage, Frequency.frequency as frequency, Period.period as period, Dosage.factor as dosage_factor, Frequency.factor as frequency_factor, Period.factor as period_factor, Drug.stock as stock, Drug.reorder_level as reorder_level,Prescribe_items.quantity as dispenced_quantity";
			$sql .= " FROM Prescribe_items,Opd_prescription,Drug,Dosage,Frequency,Period";
			$sql .=" WHERE   (Opd_prescription.id = Prescribe_items.opd_prescription_id) AND (Drug.id = Prescribe_items.drug_id) AND (Dosage.id = Prescribe_items.dosage_id) AND (Frequency.id = Prescribe_items.frequency_id) AND (Period.id = Prescribe_items.period_id) AND (Prescribe_items.opd_prescription_id = '".$pres_id."')" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	public function get_status($pres_id)
	{
		$status = $this->db->select('status')
							 ->get_where('Opd_prescription', array('id' => $pres_id))
							 ->row()
							 ->status;
return $status;
						 }

}
