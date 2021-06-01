<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['jumlah_hunian'] = $this->kost_model->get_jumlah_hunian();
		$data['jumlah_member'] = $this->member_model->get_jumlah_member();
		$data['jumlah_komplain'] = $this->komplain_model->get_jumlah_komplain();
		$data['kost'] = $this->kost_model->tampil_data('hunian')->result();
		
		$data['title'] = "Bu Kost";
		$this->load->view('templates_dashboard/header',$data);
		$this->load->view('dashboard/index');
		$this->load->view('templates_dashboard/footer');
	}

	public function hunian()
	{
		$data['kost'] = $this->kost_model->tampil_data('hunian')->result();
		
		$data['title'] = "Bu Kost | Hunian";
		$this->load->view('templates_dashboard/header',$data);
		$this->load->view('dashboard/hunian');
		$this->load->view('templates_dashboard/footer');
	}

	

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */