<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {
	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = 'Komplain Hunian';
		$data['komplain'] = $this->komplain_model->ambil_data();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/komplain');
		$this->load->view('templates_admin/footer');
	}

	public function delete_komplain($id)
	{
		$where = array('id_komplain' => $id);
		$this->komplain_model->delete_data($where,'komplain');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Komplain Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/komplain');
	}


}

/* End of file Komplain.php */
/* Location: ./application/controllers/admin/Komplain.php */