<?php
class UserModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function save_user($data)
	{
		$this->db->insert('User',$data);
		return true;
	}

	public function update_user($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('User', $data);
		 return $result;
	}

	public function delete_user($id){
	  $this -> db -> where('id', $id);
	  $this -> db -> delete('User');
	}

}
