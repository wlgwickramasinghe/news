<?php
class NewsModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
	//get news id
	public function load_id(){

        $SQL = "SELECT MAX(id) FROM news";    
        $query = $this->db->query($SQL);
        return $query->result_array();
    
	}

	//Save News
	public function save_news($data){
		$this->db->insert('news',$data);
		return true;
	}
	//Update News
	public function update_news($id,$data){
		$this->db->where('id', $id);
		$result = $this->db->update('news', $data);
		return $result;
	}
		//Edit News
	public function load_news(){

	 $dataset = array();
	 $sql=" SELECT  category.category as category, country.country as country, news.id as id, news.type as type, news.title as title , news.content as content ,news.status as status";
		$sql .= " FROM news,category,country";
		$sql .=" WHERE (news.category_id = category.id) AND (news.country_id = country.id) ORDER BY news.id DESC" ;
		 $Q =  $this->db->query($sql);
				 if ($Q->num_rows() > 0){
						 foreach ($Q->result_array() as $row){
								 $dataset[] = $row;
						 }
				 }
				 $Q->free_result();
				 return $dataset;
 	}
	//Edit News
	public function get_news_info($id)
 	{

	 $dataset = array();
	 $sql=" SELECT  category.category as category, country.country as country, news.id as id, news.type as type, news.title as title , news.content as content, news.image as image, news.status as status";
		$sql .= " FROM news,category,country";
		$sql .=" WHERE (news.category_id = category.id) AND (news.country_id = country.id) AND (news.id = '".$id."') ORDER BY news.id DESC" ;
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
