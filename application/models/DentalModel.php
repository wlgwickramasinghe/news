<?php

class DentalModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->_table = 'opd_visits';
        $this->_key = 'OPDID';
		$this->load->database();
    }

	function get_treatment_info(){

		$dataset = array();
		$sql=" select id,Treatment ";
        $sql .= " FROM  dental_treatment" ;
        $sql .= " WHERE Active = 1 " ;
        $Q =  $this->db->query($sql);
        if ($Q->num_rows() >0){
            foreach ($Q->result_array() as $row){
                $dataset[] = $row;
            }
        }
        $Q->free_result();
        return $dataset;
	}
	function get_opd_treatment_info($opd_id){

    $opd_id = stripslashes($opd_id);
    // $opd_id = mysqli_real_escape_string($opd_id);
		$dataset = array();
		$sql=" select list,teeth_id,CreateDate ";
        $sql .= " FROM  opd_dental_treatment" ;
        $sql .= " WHERE opd_id = '$opd_id'" ;
        $Q =  $this->db->query($sql);
        if ($Q->num_rows() >0){
            foreach ($Q->result_array() as $row){
                $dataset[] = $row;
            }
        }
        $Q->free_result();
        return $dataset;
	}
	function get_opd_treatment_info_by_pid($pid){

    $pid = stripslashes($pid);
    // $pid = mysqli_real_escape_string($pid);
		$dataset = array();
		$sql=" select list,teeth_id ";
        $sql .= " FROM  opd_dental_treatment" ;
        $sql .= " WHERE pid = '$pid' GROUP BY teeth_id ORDER BY CreateDate DESC " ;
        $Q =  $this->db->query($sql);
        if ($Q->num_rows() >0){
            foreach ($Q->result_array() as $row){
                $dataset[] = $row;
            }
        }
        $Q->free_result();
        return $dataset;
	}

  function opd_treatment_onload($pid){

$dataset = array();
$sql=" SELECT * ";
    $sql .= " FROM opd_dental_treatment " ;
    $sql .= "   WHERE pid = '$pid' " ;
    $sql .= "   " ;

    $Q =  $this->db->query($sql);
       if ($Q->num_rows() > 0){
           foreach ($Q->result_array() as $row){
               $dataset[] = $row;
           }
       }
       $Q->free_result();
       return $dataset;
}



function get_opd_treatment_by_pid($pid,$teeth_id){

  $dataset = array();
  $sql=" select *";
      $sql .= " FROM opd_dental_treatment  " ;
      $sql .= " WHERE pid = '$pid' and teeth_id='$teeth_id' ORDER BY CreateDate DESC " ;

   $Q =  $this->db->query($sql);
      if ($Q->num_rows() > 0){
          foreach ($Q->result_array() as $row){
              $dataset[] = $row;
              $list = $row['list'];
                $list_arr = explode("|",$list);

          }

      }else{
        $list = null;
        $list_arr = null;

      }
      $Q->free_result();
      return $dataset;
}

function get_opd_treatment(){
  $dataset = array();
  $sql=" select *";
      $sql .= " FROM dental_treatment  " ;
      $sql .= " WHERE Active = 1" ;

  // echo $sql;
  // exit;
   $Q =  $this->db->query($sql);
      if ($Q->num_rows() > 0){
          foreach ($Q->result_array() as $row){
              $dataset[] = $row;
          }
      }
      $Q->free_result();
      return $dataset;
}


function get_opd_treatment_info_by_opd_id_teeth_id($opd_id,$teeth_id){
  $dataset = array();
  $sql=" select *";
      $sql .= " FROM opd_dental_treatment  " ;
      $sql .= " WHERE opd_id='$opd_id' and teeth_id='$teeth_id' ORDER BY CreateDate DESC" ;

  // echo $sql;
  // exit;
   $Q =  $this->db->query($sql);
      if ($Q->num_rows() > 0){
          foreach ($Q->result_array() as $row){
              $dataset[] = $row;
          }
      }
      $Q->free_result();
      return $dataset;
}

          public function create_odt($data)
  {
    $this->db->insert('opd_dental_treatment',$data);
    return $this->db->insert_id();
   }

  public function update_odt($id,$data){
    $this->db->where('id', $id);
    $result = $this->db->update('opd_dental_treatment', $data);
     return $result;
  }

  public function open_dt_id($tr)
  {

    $this->db->where('Treatment', $tr);
    $this->db->from('dental_treatment');
    $query = $this->db->get();
    return $query->row_array();
  }


}
