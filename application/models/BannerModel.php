<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class BannerModel extends CI_Model{
     
    function get_category(){
        $query = $this->db->get('category');
        return $query;  
    }

    function get_country(){
        $query = $this->db->get('country');
        return $query;  
    }
    function get_price(){
        $query = $this->db->get('ad_master');
        return $query;  
    }
    function get_sub_category($category_id){
        $query = $this->db->get_where('sub_category', array('subcategory_category_id' => $category_id));
        return $query;
    }
     
}