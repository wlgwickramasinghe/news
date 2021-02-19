<?php
class AppointmentModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	// Create an appointment
	public function save_appointment($data)
	{
		$this->db->insert('appointment',$data);
		return true;
	}

	// Update an appointment
	public function update_appointment($id,$data)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('appointment', $data);
		return $result;
	}

	// Load services
	public function get_service()
	{
		$this->db->select('service');
		$result = $this->db->get_where('Services', array('active' => '1'))->result_array();	

	 	return $result;
	
	}

	//Load appointment patient details
	public function get_appointment_info(){

		$dataset = array();
			$sql=" SELECT Patient.name as patient,appointment.patient_id as patient_id,appointment.active as active,appointment.date as date,appointment.time as time,appointment.service_type as service_type,appointment.id as id,appointment.create_date as create_date";
			$sql .= " FROM Patient,appointment";
			$sql .=" WHERE (Patient.id = appointment.patient_id) and Patient.CreateUser ='".$this->session->UID."' ";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;

	}

	//Load view appointment details
	public function get_appointment(){


		$dataset = array();
			$sql=" SELECT Patient.name as patient,Patient.contact as contact,Patient.name as name,appointment.patient_id as patient_id,appointment.active as active,appointment.date as date,appointment.time as time,appointment.service_type as service_type,appointment.id as id,appointment.create_date as create_date";
			$sql .= " FROM Patient,appointment";
			$sql .=" WHERE (Patient.id = appointment.patient_id)";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;


	}
	

	//Load view appointment details
	public function get_pending_appointment(){


		$dataset = array();
			$sql=" SELECT Patient.name as patient,Patient.contact as contact,Patient.name as name,appointment.patient_id as patient_id,appointment.active as active,appointment.date as date,appointment.time as time,appointment.service_type as service_type,appointment.id as id,appointment.create_date as create_date,appointment.status as status";
			$sql .= " FROM Patient";
			$sql .= " JOIN appointment";
			$sql .=" ON (Patient.id = appointment.patient_id)";
			$sql .=" WHERE (appointment.status = 0 and appointment.active = 1)";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;


	}

	public function update_appointment_status($id)
	{
		// print_r($id);die;
		$this->db->where('id', $id);
		$result = $this->db->update('appointment', array('status'=>1));
		return $result;

	}

	public function check_edit_appointment($timecheck,$datecheck){

		// echo $timecheck;



			$sql=" SELECT Patient.name as patient,Patient.name as name,appointment.patient_id as patient_id,appointment.active as active,appointment.date as date,appointment.time as time,appointment.service_type as service_type,appointment.id as id,appointment.create_date as create_date,appointment.status as status";
			$sql .= " FROM Patient";
			$sql .= " JOIN appointment";
			$sql .=" ON (Patient.id = appointment.patient_id)";
			$sql .=" WHERE (appointment.time = '".$timecheck."')";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
						return 1;
								}
								else{
									return 0;
								}
				


	}
	

}
