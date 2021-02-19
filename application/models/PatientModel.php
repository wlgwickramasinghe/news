<?php
class PatientModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
	// save patient
	public function save_patient($data)
	{
		$this->db->insert('Patient',$data);
		return $this->db->insert_id();
	 }
	 // update patient
	public function update_patient($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('Patient', $data);
		 return $result;
	}

	// load patient
	public function get_patient()
	{

		$this->db->order_by("id", "desc");
		$this->db->from('Patient');
		$query = $this->db->get();
		return $query->result_array();
	}
	// load patient by id
	public function get_patient_by_id($pid)
	{

		$this->db->where('id', $pid);
		$this->db->from('Patient');
		$query = $this->db->get();
		return $query->result_array();
	}
	// load visit info
	public function get_visit_info_by_id($pid)
	{

		$this->db->where('id', $pid);
		$this->db->from('Opd_visit');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_patients(){

		$data = [];

 		$val = $this->input->get('p');
		// var_dump($val);

		$this->db->select('id,name');
		$this->db->from('Patient');
		$this->db->like('name', $val);
		$query = $this->db->get()->result_array();

		foreach ($query as $key => $value) {

			$data['results'][$key] = [ 'id' => $value['id'], 'text' => $value['name']];
		}

		return $data;
	}

	public function get_complaints(){

		$data = [];

 		$val = $this->input->get('q');
		// var_dump($val);

		$this->db->select('id,complaint');
		$this->db->from('Complaints');
		$this->db->like('complaint', $val);
		$query = $this->db->get()->result_array();

		foreach ($query as $key => $value) {

			$data['results'][$key] = [ 'id' => $value['id'], 'text' => $value['complaint']];
		}

		return $data;
	}
	// create visit
	public function create_visit($data){

		$res = $this->db->insert('Opd_visit',$data);
		return $res;

	}

	 public function get_max_visit_id()
	{

		$dataset = array();
			$sql="SELECT id from Opd_visit ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;


	}

//Create Prescription
	public function create_prescription($data){

		$res = $this->db->insert('Opd_prescription',$data);
		return $this->db->insert_id();

	}


//Load prescribed items
	public function get_items($pres_id){

		$dataset = array();
			$sql=" SELECT Drug.name as drug,Dosage.dosage as dosage,Frequency.frequency as frequency,Period.period as period, Prescribe_items.id as id, Prescribe_items.opd_prescription_id as pres_id";
			$sql .= " FROM Drug,Dosage,Frequency,Period,Prescribe_items";
			$sql .=" WHERE   (Drug.id = Prescribe_items.drug_id) AND (Dosage.id = Prescribe_items.dosage_id) AND (Frequency.id = Prescribe_items.frequency_id) AND (Period.id = Prescribe_items.period_id) AND Prescribe_items.opd_prescription_id = '".$pres_id."' " ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	//Load patient visit informations
	public function get_visit_info($pid)
 {

	 $dataset = array();
	 $sql=" SELECT Patient.name,Opd_visit.date_time_of_visit, Opd_visit.id as visit_id, CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS doctor,Complaints.complaint as complaint";
		$sql .= " FROM Opd_visit,Patient,Complaints,User";
		$sql .=" WHERE (Patient.id = Opd_visit.patient_id) AND (Opd_visit.complaint = Complaints.id) AND (User.id = Opd_visit.doctor) AND (Patient.id = '".$pid."') ORDER BY Opd_visit.date_time_of_visit DESC" ;
		 $Q =  $this->db->query($sql);
				 if ($Q->num_rows() > 0){
						 foreach ($Q->result_array() as $row){
								 $dataset[] = $row;
						 }
				 }
				 $Q->free_result();
				 return $dataset;



 }

//Get opened visit informations
 public function get_this_visit_info($pid,$visit_id)
 {

	$dataset = array();
	$sql=" SELECT Patient.name,Opd_visit.date_time_of_visit, Opd_visit.id as visit_id, CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS doctor,Complaints.complaint as complaint";
	 $sql .= " FROM Opd_visit,Patient,Complaints,User";
	 $sql .=" WHERE (Patient.id = Opd_visit.patient_id) AND (Opd_visit.complaint = Complaints.id) AND (User.id = Opd_visit.doctor) AND (Patient.id = '".$pid."') AND ( Opd_visit.id = '".$visit_id."' ) ORDER BY Opd_visit.date_time_of_visit DESC" ;
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;



 }


//Get previous visit prescribed drugs
public function get_previous_items($pid)
{

	$dataset = array();
		$sql="SELECT id from Opd_prescription WHERE `patient_id` = '".$pid."' ORDER BY prescribe_date DESC LIMIT 2";
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$pres_id[1] = $row;
						}
				}
				$Q->free_result();

				$last_prescription_id = $pres_id[1]['id'];

				$dataset = array();
					$sql=" SELECT Drug.name as drug,Drug.id as drug_id,Dosage.dosage as dosage,Dosage.id as dosage_id,Frequency.frequency as frequency,Frequency.id as frequency_id,Period.period as period,Period.id as period_id, Prescribe_items.id as id, Prescribe_items.opd_prescription_id as pres_id";
					$sql .= " FROM Drug,Dosage,Frequency,Period,Prescribe_items";
					$sql .=" WHERE   (Drug.id = Prescribe_items.drug_id) AND (Dosage.id = Prescribe_items.dosage_id) AND (Frequency.id = Prescribe_items.frequency_id) AND (Period.id = Prescribe_items.period_id) AND Prescribe_items.opd_prescription_id = '".$last_prescription_id."' " ;
					$Q =  $this->db->query($sql);
							if ($Q->num_rows() > 0){
									foreach ($Q->result_array() as $row){
											$dataset[] = $row;
									}
							}
							$Q->free_result();
							return $dataset;
		 }

//Load Similar Patients
		 public function get_similar_patient($value)
		 {

		  $dataset = array();
		 	 $sql="SELECT * FROM Patient WHERE name LIKE '%".$value."%'";
		 	 $Q =  $this->db->query($sql);
		 			 if ($Q->num_rows() > 0){
		 					 foreach ($Q->result_array() as $row){
		 							 $dataset[] = $row;
		 					 }
		 			 }
		 			 $Q->free_result();
		 			 return $dataset;


		 // $id = 8;
		 // 		$result = $this->db->get_where('Opd_visit', array('id' => $id))->result_array();
		 // 		// $this->db->select_max('id');
		 // 		// $result = $this->db->get('Opd_visit');
		 // 		return $result;
		 // $this->db->select_max('id');
		 // $query = $this->db->get('Opd_visit');
		 // return $query;

		 }

		 
		 public function get_this_visit_prescrition($pid,$visit_id)
		 {

	 				$dataset = array();
	 					$sql="SELECT * from Opd_prescription WHERE opd_visit_id = '".$visit_id."' AND patient_id='".$pid."' ";
	 					$Q =  $this->db->query($sql);
	 							if ($Q->num_rows() > 0){
	 									foreach ($Q->result_array() as $row){
	 											$dataset[] = $row;
	 									}
	 							}
	 							$Q->free_result();
	 							return $dataset;



		 }

		
		 public function get_prescription_status($pres_id)
		 {
			 $status = $this->db->select('status')
		 						 ->get_where('Opd_prescription', array('id' => $pres_id))
		 						 ->row()
		 						 ->status;
		 						 return $status;



		 }

		 public function get_this_visit_pres_payment($visit_id){

			 $dataset = array();
				 $sql=" SELECT * FROM Prescribe_view WHERE visit_id = '".$visit_id."' ";

				 $Q =  $this->db->query($sql);
						 if ($Q->num_rows() > 0){
								 foreach ($Q->result_array() as $row){
										 $dataset[] = $row;
								 }
						 }
						 $Q->free_result();
						 return $dataset;

		 } 

		
		
	public function get_current_sevice_charger(){

			 $price = $this->db->select('price')
		 						 ->get_where('Service_chargers', array('active' => 'Yes'))
		 						 ->row()
		 						 ->price;
		 						 return $price;


		 }
		 public function get_tr_p($name){

		$data = array();

		$sql=" SELECT *";
        $sql .= " FROM dental_treatment where Treatment ='".$name."' ";

        $Q =  $this->db->query($sql);
        if ($Q->num_rows() == 1){
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;

		 }

	public function get_visit_payment_status($visit_id){

			 $dataset = array();
				 $sql=" SELECT * FROM Payment WHERE visit_id = '".$visit_id."' ";

				 $Q =  $this->db->query($sql);
						 if ($Q->num_rows() > 0){
								 foreach ($Q->result_array() as $row){
										 $dataset[] = $row;
								 }
						 }
						 $Q->free_result();
						 return $dataset;

			 // $status = $this->db->select('status')
		 		// 				 ->get_where('Payment', array('visit_id' => $visit_id))
		 		// 				 ->row()
		 		// 				 ->status;
		 		// 				 return $status;

		}

	public function load($id)
		{
			$result = $this->db->get_where('Patient', array('id' => $id))->result_array();
			return $result;

		}

		

	 public function get_today_patient($date){

		$dataset = array();
			$sql=" SELECT Patient.id as id,Patient.name as name,Patient.address as address,Patient.contact as contact,Patient.blood as blood, appointment.date as Adate,appointment.time as time";
			$sql .= " FROM Patient,appointment";
			$sql .=" WHERE   (Patient.id = appointment.patient_id) AND (appointment.status = 1) AND (appointment.active = 1) AND (Patient.active = 1)AND date(appointment.date) = '".$date."' " ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	public function get_patient_history($id){


		// $dataset = array();
		// 	$sql=" SELECT Patient.id as id,Patient.name as name,Patient.address as address,Patient.contact as contact,Patient.blood as blood, appointment.date as Adate,appointment.time as time";
		// 	$sql .= " FROM Patient,appointment";
		// 	$sql .=" WHERE   (Patient.id = appointment.patient_id) AND (appointment.status = 1) AND (appointment.active = 1) AND (Patient.active = 1)AND date(appointment.date) = '".$id."' " ;
		// 	$Q =  $this->db->query($sql);
		// 			if ($Q->num_rows() > 0){
		// 					foreach ($Q->result_array() as $row){
		// 							$dataset[] = $row;
		// 					}
		// 			}
		// 			$Q->free_result();
		// 			return $dataset;
// 
		// echo $id; 
		//  die;


		$dataset = array();
			$sql=" SELECT Patient.id as id,Patient.name as name,Patient.address as address,Patient.contact as contact,Patient.blood as blood, appointment.date as Adate,appointment.time as time,appointment.service_type as service";
			$sql .= " FROM Patient,appointment";
			$sql .=" WHERE (Patient.id = appointment.patient_id) AND (appointment.patient_id) = '".$id."' " ;

			// $sql .=" WHERE   (Patient.id = appointment.patient_id) AND (appointment.status = 1) AND (appointment.id) = '".$id."' " ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}




}
