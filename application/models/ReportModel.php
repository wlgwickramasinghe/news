<?php
class ReportModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	//Visit information report

	public function get_visit_info($from,$to){

    $dataset = array();
    $sql=" SELECT Patient.name,Opd_visit.date_time_of_visit, CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS doctor,Complaints.complaint as complaint";
     $sql .= " FROM Opd_visit,Patient,Complaints,User";
     $sql .=" WHERE (Patient.id = Opd_visit.patient_id) AND (Opd_visit.complaint = Complaints.id) AND (User.id = Opd_visit.doctor) AND (date(Opd_visit.date_time_of_visit) BETWEEN  '".$from."' AND '".$to."') ORDER BY Opd_visit.date_time_of_visit DESC" ;
      $Q =  $this->db->query($sql);
          if ($Q->num_rows() > 0){
              foreach ($Q->result_array() as $row){
                  $dataset[] = $row;
              }
          }
          $Q->free_result();
          return $dataset;
  }

	//Encounter Statistics information report

	public function get_encounter_statistics_info($from,$to){

    $dataset = array();
    $sql=" SELECT COUNT(Patient.id) as tot,date(date_time_of_visit) as v_date";
     $sql .= " FROM Opd_visit,Patient";
     $sql .=" WHERE (Patient.id = Opd_visit.patient_id) AND (date(Opd_visit.date_time_of_visit) BETWEEN  '".$from."' AND '".$to."') ORDER BY Opd_visit.date_time_of_visit DESC" ;
      $Q =  $this->db->query($sql);
          if ($Q->num_rows() > 0){
              foreach ($Q->result_array() as $row){
                  $dataset[] = $row;
              }
          }
          $Q->free_result();
          return $dataset;
  }

	//Drug Stock information report

	public function get_stock_info(){

    $dataset = array();
    $sql=" SELECT*";
     $sql .= " FROM Drug";
      $Q =  $this->db->query($sql);
          if ($Q->num_rows() > 0){
              foreach ($Q->result_array() as $row){
                  $dataset[] = $row;
              }
          }
          $Q->free_result();
          return $dataset;
  }

	//Encounter Statistics information report

	public function get_dispensed_drug($date){

		$dataset = array();
		$sql="SELECT Drug.name as 'name', SUM( Prescribe_items.quantity) as 'sum'  FROM `Prescribe_items` ,`Opd_prescription`,`Drug` where
		  (Opd_prescription.prescribe_date LIKE '$date%')
		  AND (Opd_prescription.id =  Prescribe_items.opd_prescription_id)
		  AND(Drug.id=Prescribe_items.drug_id)
		  AND(Prescribe_items.status = 'Dispensed')
		GROUP BY Prescribe_items.drug_id ORDER BY Drug.name" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}


	public function get_create_user($id,$table)
	{

		$dataset = array();
		$sql=" SELECT CONCAT(user_title,' ',first_name,' ',last_name) as full_name";
		if($table == 'Opd_prescription'){
		 $sql .= " FROM User,Opd_prescription";
	 }elseif ($table == 'Lab_order') {
		 $sql .= " FROM User,Lab_order";
	 }
		 $sql .="  WHERE (".$table.".id = '".$id."') AND (".$table.".create_user = User.id)" ;
			$Q =  $this->db->query($sql);
			$res = $Q->row()->full_name;

					return $res;

	}

	//Registry information calander report of patient

	public function get_patient_info($date){

		$dataset = array();
		$sql=" SELECT Patient.*, CONCAT(user_title,' ',first_name,' ',last_name) as full_name";
		 $sql .= " FROM User,Patient";
		 $sql .=" WHERE (Patient.createUser = User.id) AND (date(Patient.createDate) = '".$date."')  ORDER BY Patient.createDate DESC" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	//Visit information calender report

	public function get_visit_info_calender($date){

		$dataset = array();
		$sql=" SELECT Patient.name,Patient.id as PID,Opd_visit.date_time_of_visit, CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS doctor,Complaints.complaint as complaint";	
		 $sql .= " FROM Opd_visit,Patient,Complaints,User";
		 $sql .=" WHERE (Patient.id = Opd_visit.patient_id) AND (Opd_visit.complaint = Complaints.id) AND (User.id = Opd_visit.doctor) AND (date(Opd_visit.date_time_of_visit) = '".$date."') ORDER BY Opd_visit.date_time_of_visit DESC" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_doctor_info_calender($date){

		$dataset = array();
		$sql=" SELECT COUNT(Opd_visit.id) as count, CONCAT(User.user_title, ' ', User.first_name, ' ', User.last_name) AS doctor";
		 $sql .= " FROM Opd_visit,User";
		 $sql .=" WHERE  (User.id = Opd_visit.doctor) AND (date(Opd_visit.date_time_of_visit) = '".$date."') ORDER BY COUNT(Opd_visit.id) DESC" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_income_info_calender($date){

		$dataset = array();
		$sql=" SELECT SUM(Payment.amount) as total";
		 $sql .= " FROM Payment";
		 $sql .=" WHERE (date(Payment.paid_date) = '".$date."') " ;
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
