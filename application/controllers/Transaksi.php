<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$user = $this->session->userdata('email');
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, hunian hn, users usr WHERE tr.id_hunian=hn.id_hunian AND tr.email=usr.email AND usr.email='$user' ORDER BY id_transaksi DESC")->result();
		$data['title'] = "Bu Kost | Transaksi";
		$this->load->view('templates_dashboard/header',$data);
		$this->load->view('dashboard/transaksi');
		$this->load->view('templates_dashboard/footer');
	} 

	public function pembayaran($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, hunian hn, users usr WHERE tr.id_hunian=hn.id_hunian AND tr.email=usr.email AND tr.id_transaksi='$id' ORDER BY id_transaksi DESC")->result();
	
		$data['title'] = "Bu Kost | Pembayaran";
		$this->load->view('templates_dashboard/header',$data);
		$this->load->view('dashboard/pembayaran');
		$this->load->view('templates_dashboard/footer');
	}
	public function pembayaran_aksi()
	{
		$id 					= $this->input->post('id_transaksi');
		$bank 					= htmlspecialchars($this->input->post('bank'));
		$nama_rekening 					= htmlspecialchars($this->input->post('nama_rekening'));
		$nomor_rekening 					= htmlspecialchars($this->input->post('nomor_rekening'));
		$tanggal_kembali 					= htmlspecialchars($this->input->post('tanggal_kembali'));
		$nominal_transfer 					= htmlspecialchars($this->input->post('nominal_transfer'));
		$status_pembayaran 					= "Sedang Menunggu Konfirmasi";


		$bukti_pembayaran 		= $_FILES['bukti_pembayaran']['name'];

			if($bukti_pembayaran){
				$config ['upload_path'] = './assets/uploads/bukti_pembayaran';
				$config ['allowed_types'] = 'pdf|jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if( $this->upload->do_upload('bukti_pembayaran') ){
					$bukti_pembayaran = $this->upload->data('file_name');
					$this->db->set('bukti_pembayaran',$bukti_pembayaran);
				}else{
					echo $this->upload->display_errors();
				}

			}

			$data = array(
				'nama_rekening'  	=>  $nama_rekening,
				'nomor_rekening'  	=>  $nomor_rekening,
				'bank'  			=>  $bank,
				'tanggal_kembali'  			=>  $tanggal_kembali,
				'nominal_transfer'  =>  $nominal_transfer,
				'status_pembayaran'  =>  $status_pembayaran,
				'bukti_pembayaran'  =>  $bukti_pembayaran
			);
			$where = array(
				'id_transaksi'			=> $id
			);

			$this->booking_model->update_data('transaksi', $data, $where); 
			$this->session->set_flashdata('pesan','
				<h3 style="color: green">Bukti pembayaran berhasil diupload!</h3>
				
				');
			redirect('transaksi');


	} 

	public function cetak_invoice($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, hunian hn, users usr WHERE tr.id_hunian=hn.id_hunian AND tr.email=usr.email AND tr.id_transaksi='$id'")->result();
		$data['title'] = "Cetak Invoice Pembayaran";
		$this->load->view('dashboard/cetak_invoice',$data);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */