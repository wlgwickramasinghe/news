<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Banners extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('BannerModel','BannerModel');
    }
 
    function index(){
        $data["category_list"] = $this->db->get_where('category', array('status' => 'A' ))->result_array();      
        $this->load->vars($data);
        
        

        $data['category'] = $this->BannerModel->get_category()->result();
        $data['country'] = $this->BannerModel->get_country()->result();
        $data['price'] = $this->BannerModel->get_price()->result();
        $this->load->view('web/adForm', $data);
    }
 
    function get_sub_category(){
        $category_id = $this->input->post('id',TRUE);
        $data = $this->BannerModel->get_sub_category($category_id)->result();
        echo json_encode($data);
    }
}