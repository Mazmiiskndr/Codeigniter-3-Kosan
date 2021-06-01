<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {

	public function index()
	{
		$komplain = $this->komplain_model->get_site_data()->row_array();
		$data['id_hunian'] = $komplain['id_hunian'];
			
		$data['title'] = "Bu Kost | Komplain";
		$this->load->view('templates_dashboard/header',$data);
		$this->load->view('dashboard/komplain');
		$this->load->view('templates_dashboard/footer'); 
	}

	public function komplain_aksi()
	{
	
			$id 					= $this->session->userdata('id');
			$id_hunian 					= htmlspecialchars($this->input->post('id_hunian'));
			$perihal 			= htmlspecialchars($this->input->post('perihal'));
			$isi 			= htmlspecialchars($this->input->post('isi'));

 

			$data = array(
				'id_hunian' 		=> $id_hunian,
				'id_member' 			=> $id,
				'perihal' 	=> $perihal,
				'isi' 		=> $isi

			);
			$this->booking_model->insert_booking($data,'komplain');

			$this->session->set_flashdata('pesan','
				<h3 style="color: green">Booking berhasil! Lanjukan untuk transaksi</h3>
				
				');
			redirect('dashboard');
		
	}

}

/* End of file Komplain.php */
/* Location: ./application/controllers/Komplain.php */