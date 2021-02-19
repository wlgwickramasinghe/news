<?php
class VideoModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	//Save Video
	public function save_video($data){
		$this->db->insert('video',$data);
		return true;
	}
	//Update Video
	public function update_video($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('video', $data);
		 return $result;
	}
	
}
