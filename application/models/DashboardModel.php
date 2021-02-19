<?php
class DashboardModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

//Get pending appointment list
	public function appointment_pending_list()
	{

		$total = $this->db->select('count(*) as total')
							->get_where('appointment', array('status' => '0'))
							->row()
							->total;
							return $total;

	}

	//Get Today patient list
	public function Today_Patient_list()
	{

		$total = $this->db->select('count(*) as total')
							->get_where('appointment', array('status' => '0'))
							->row()
							->total;
							return $total;

	}


	//Get low stock drug
	public function low_stock_list()
	{
		$dataset = array();
			$sql=" SELECT D1.*";
			$sql .= " FROM Drug D1,Drug D2 ";
			$sql .=" WHERE   (D1.id = D2.id) AND (D1.stock < D2.reorder_level)" ;
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
		// $result = $this->db->get_where('Drug', array('stock <' => 1000))->result_array();
		// return $result;

	}

	public function symptom_chart($date)
	{
		if($date){
			$date_format = date("Y-m-d", strtotime($date) );
		}
		// print_r($da);die;
		$dataset = array();
			$sql=" SELECT Complaints.complaint as name,count(Opd_visit.complaint) as count";
			$sql .= " FROM Opd_visit,Complaints ";
			$sql .=" WHERE Opd_visit.complaint =  Complaints.id" ;
			if($date){
			$sql .=" AND date(Opd_visit.date_time_of_visit) = '".$date_format."'   group by Opd_visit.complaint" ;
		}else{
				$sql .=" group by Opd_visit.complaint" ;
		}
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;

										// $nums = ['name' => $dataset[0],
										//       'count' => $dataset[1],
										//     ];
							}
					}
					$Q->free_result();
					// print_r($dataset);die ;
					 // var_dump(json_encode($dataset));
					return $dataset;
	}

	//Get pharmacy queue list
	public function pharmacy_queue_list()
	{

		$total = $this->db->select('count(*) as total')
							->get_where('Opd_prescription', array('date(prescribe_date)' => date('Y-m-d'),'status' => 'Pending'))
							->row()
							->total;
							return $total;

	}

		public function last_seven_days_income()
	{
		// print_r($da);die;
		$dataset = array();
			$sql=" SELECT sum(amount) as amount,date(paid_date) as date ";
			$sql .= " FROM `Payment`";
			$sql .="  WHERE date(paid_date) >= DATE(NOW()) - INTERVAL 7 DAY GROUP BY paid_date" ;

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
