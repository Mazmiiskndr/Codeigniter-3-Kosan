<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['jumlah_hunian'] = $this->kost_model->get_jumlah_hunian();
		$data['jumlah_member'] = $this->member_model->get_jumlah_member();
		$data['jumlah_komplain'] = $this->komplain_model->get_jumlah_komplain();
		$data['kost'] = $this->kost_model->tampil_data('hunian')->result();

		$data['users'] = $this->member_model->tampil_data('users')->result();
		$data['komplain'] = $this->komplain_model->ambil_data();
		$data['komplain'] = $this->komplain_model->ambil_data();
		$data['title'] = "Admin | Dashboard";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/index');
		$this->load->view('templates_admin/footer');		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */