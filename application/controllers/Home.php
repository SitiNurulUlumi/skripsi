<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('plat_model');
        $this->load->model('history_model');
        $this->load->model('historykeluar_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['subtitle'] = 'Ikhtiar';
        $data['subtitle2'] = 'List Antrian Kapal';
        $data['user'] = $this->user_model->getRows();
        $data['plat'] = $this->plat_model->getRows();
        $data['history'] = $this->history_model->getRows();
        $data['historykeluar'] = $this->historykeluar_model->getRows();
        
        #chart js nurul
        // $start_date = $this->input->get('start_date');
        // $end_date = $this->input->get('end_date');
        // if (!$start_date || !$end_date) {
        //     $start_date = date('Y-m-d');
        //     $end_date = date('Y-m-d');
        // }
        // $data['start_date'] = $start_date;
        // $data['end_date'] = $end_date;
        // $data['history'] = $this->history_model->get_history($start_date, $end_date);
        
        

		
        
        // echo '<pre>';
        // die(var_dump($data['listBongkar']));
        
        $this->load->view('templates/admin-header', $data);
        $this->load->view('templates/admin-topbar', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/admin-footer');
        $this->load->view('script');
        $this->load->view('home');
    }
    public function getChartData()
    {
        // Mengambil data dari database berdasarkan filter tanggal
        $startDate = $this->input->post('start_date');
        $endDate = $this->input->post('end_date');
        $data['chartData'] = $this->getDataFromDatabase($startDate, $endDate);

        $this->load->view('chart_data', $data);
    }

    private function getDataFromDatabase($startDate, $endDate)
    {
        $this->load->database();
        $this->db->select('Record_Date, Total_Car, Total_Motorbike, Total_Truck, Total_Bus');
        $this->db->from('history');
        $this->db->where('Record_Date >=', $startDate);
        $this->db->where('Record_Date <=', $endDate);
        $query = $this->db->get();

        return $query->result();
    }
}
