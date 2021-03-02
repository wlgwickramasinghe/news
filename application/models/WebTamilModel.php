<?php
class WebTamilModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function get_news_category1(){

		
		$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country, news.category_id as category_id";
			$sql .= " FROM news,category,country";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and (news.category_id = '2') and (news.language = 'Tamil') ";
			$sql .=" ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_news_category2(){
		$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country,news.category_id as category_id";
			$sql .= " FROM news,category,country";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and ( news.category_id = '8') and (news.language = 'Tamil') ";
			$sql .=" ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_news_category3(){
		$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country,news.category_id as category_id";
			$sql .= " FROM news,category,country";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and ( news.category_id = '3') and (news.language = 'Tamil') ";
			$sql .=" ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_news_category4(){
			$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country,news.category_id as category_id";
			$sql .= " FROM news,category,country";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and ( news.category_id = '1') and (news.language = 'Tamil') ";
			$sql .=" ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_recent_news (){
		
			$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country";
			$sql .= " FROM news,category,country";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and (news.language = 'Tamil')";
			$sql .=" ORDER BY id DESC LIMIT 6";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_single_news($id){
			$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country,category.id as category_id";
			$sql .= " FROM news,category,country";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and ( news.id = $id) and (news.language = 'Tamil') ";
			$sql .=" ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	public function get_recent_comment($id){
			$dataset = array();
			$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country";
			$sql .= " FROM news,category,country,comme";
			$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and ( news.id = $id) and (news.language = 'Tamil') ";
			$sql .=" ORDER BY id DESC LIMIT 1";
			$Q =  $this->db->query($sql);
					if ($Q->num_rows() > 0){
							foreach ($Q->result_array() as $row){
									$dataset[] = $row;
							}
					}
					$Q->free_result();
					return $dataset;
	}

	
public function get_breaking_news(){

	$dataset = array();
	$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country, news.datetime as newstime";
	$sql .= " FROM news,category,country";
	$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = category.id) and (news.type = 'Breaking_News') and (news.language = 'Tamil')";
	$sql .=" ORDER BY id DESC LIMIT 1";
	$Q =  $this->db->query($sql);
			if ($Q->num_rows() > 0){
					foreach ($Q->result_array() as $row){
							$dataset[] = $row;
					}
			}
			$Q->free_result();
			return $dataset;
}

	
	public function get_suggest_politics_news(){
		
		$dataset = array();
		$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country,news.category_id as category_id";
		$sql .= " FROM news,category,country";
		$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = '2') and (news.category_id = category.id) and (news.language = 'Tamil') ";
		$sql .=" ORDER BY id DESC LIMIT 1";
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;
	}

	public function get_suggest_sport_news(){

		$dataset = array();
		$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country,news.category_id as category_id";
		$sql .= " FROM news,category,country";
		$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = '8') and (news.category_id = category.id) and (news.language = 'Tamil')";
		$sql .=" ORDER BY id DESC LIMIT 1";
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;

	}	

	public function get_suggest_world_news()
	{
		$dataset = array();
		$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country, news.category_id as category_id";
		$sql .= " FROM news,category,country";
		$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = '1') and (news.category_id = category.id) and (news.language = 'Tamil') ";
		$sql .=" ORDER BY id DESC LIMIT 1";
		$Q =  $this->db->query($sql);
				if ($Q->num_rows() > 0){
						foreach ($Q->result_array() as $row){
								$dataset[] = $row;
						}
				}
				$Q->free_result();
				return $dataset;
	}

	public function get_suggest_world_news_small()
	{
		$dataset = array();
		$sql=" SELECT news.id as id,news.type as type,news.title as title,news.content as content,news.status as status,news.image as image,category.category as category,country.country as country, news.category_id as category_id";
		$sql .= " FROM news,category,country";
		$sql .=" WHERE (news.country_id = country.id) and (news.status = 'A') and (news.category_id = '1') and (news.category_id = category.id) and (news.language = 'Tamil')";
		$sql .=" ORDER BY id DESC LIMIT 4";
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
