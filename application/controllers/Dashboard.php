<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        if($this->session->UID == "")
        {
            redirect(base_url('index.php/login'));
        }
        $this->load->model('LoginModel','LoginModel');
        $this->load->model('DashboardModel','DashboardModel');
    }

    public function index()
    {
      // $data['appointment_pending'] = $this->DashboardModel->appointment_pending_list();
      // $data['patient_pending'] = $this->DashboardModel->Today_Patient_list();
      // $data['pharmacy_queue'] = $this->DashboardModel->pharmacy_queue_list();
      // $data['low_stock_drugs'] = $this->DashboardModel->low_stock_list();
      // $this->load->vars($data);
      $this->load->view('dashboard');
    }
    public function chart()
    {

      $this->load->view('chart');
    }
    //Sympstom list
    public function symptom_list()
    {
      $date = $this->input->post('date');
      $symptom_chart = $this->DashboardModel->symptom_chart($date);
      echo json_encode($symptom_chart);
    }
      //Las 7 Days Income list
    public function last_seven_days_income()
    {
      $symptom_chart = $this->DashboardModel->last_seven_days_income();
      echo json_encode($symptom_chart);
    }
}
