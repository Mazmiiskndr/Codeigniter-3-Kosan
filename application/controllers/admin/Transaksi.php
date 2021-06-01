<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = 'Transaksi';
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, hunian hn, users usr WHERE tr.id_hunian=hn.id_hunian AND tr.email=usr.email")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/transaksi');
		$this->load->view('templates_admin/footer');
	} 
 
	public function pembayaran($id)
	{
		$where = array('id_transaksi' => $id);
		$data['title'] = "Pembayaran";
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id'")->result();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/konfirmasi_pembayaran');
		$this->load->view('templates_admin/footer');

	}

	public function detail_transaksi($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM transaksi tr, hunian hn, users usr WHERE tr.id_hunian=hn.id_hunian AND tr.email=usr.email AND tr.id_transaksi='$id' ORDER BY id_transaksi DESC")->result();
		$data['title'] = 'Detail Hunian';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/transaksi_detail');
		$this->load->view('templates_admin/footer');
	}

	public function cek_pembayaran()
	{
		$id 						= $this->input->post('id_transaksi');
		$status_pembayaran			= $this->input->post('status_pembayaran');
	
		$data = array(
			'status_pembayaran' => $status_pembayaran
		);

		$where = array(
			'id_transaksi' => $id
		); 

		$this->booking_model->update_data('transaksi',$data,$where);
		$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Konfirmasi Pembayaran Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/transaksi');
	}

	public function download_pembayaran($id)
	{
		$this->load->helper('download');
		$filePembayaran = $this->booking_model->downloadPembayaran($id);
		$file = 'assets/uploads/bukti_pembayaran/'.$filePembayaran['bukti_pembayaran'];
		force_download($file, null);
		$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Bukti Pembayaran Berhasil di <strong>Dwonload!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/transaksi');
	}


	public function hapus_transaksi($id)
	{
		$where = array('id_transaksi' => $id);
		$this->member_model->hapus_data($where,'transaksi');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Transaksi Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/transaksi');
	}
 


}

/* End of file Komplain.php */
/* Location: ./application/controllers/admin/Komplain.php */