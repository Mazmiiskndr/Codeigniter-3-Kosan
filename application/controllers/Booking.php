<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function tambah_booking($id)
	{
		if(!$this->session->userdata('email')) {
			redirect('auth/register');

		}else{
			$data['detail'] = $this->kost_model->ambil_id_kost($id); 
			$data['kost'] = $this->kost_model->tampil_data('hunian')->result();
			
			$data['title'] = "Bu Kost | Booking";
			$this->load->view('templates_dashboard/header',$data);
			$this->load->view('dashboard/booking');
			$this->load->view('templates_dashboard/footer');
		}
	}

	public function tambah_aksi_booking()
	{
	
			$email 					= $this->session->userdata('email');
			$id_hunian 					= htmlspecialchars($this->input->post('id_hunian'));
			$tanggal_mulai 			= htmlspecialchars($this->input->post('tanggal_mulai'));
			$harga_hunian 			= htmlspecialchars($this->input->post('harga_hunian'));
			$tanggal_kembali 			= htmlspecialchars($this->input->post('tanggal_kembali'));
			$durasi 				= htmlspecialchars($this->input->post('durasi'));
			$status_hunian 				= htmlspecialchars($this->input->post('status_hunian'));
			$bukti_pembayaran 				= htmlspecialchars($this->input->post('bukti_pembayaran'));
			$status_pembayaran 				= htmlspecialchars($this->input->post('status_pembayaran'));
 

			$data = array(
				'id_hunian' 		=> $id_hunian,
				'email' 			=> $email,
				'tanggal_mulai' 	=> $tanggal_mulai,
				'harga_hunian' 		=> $harga_hunian,
				'tanggal_kembali' 	=> '-',
				'durasi' 			=> $durasi,
				'status_hunian' 	=> 'Belum Selesai',
				'status_pembayaran' => 'Belum Lunas',

			);
			$this->booking_model->insert_booking($data,'transaksi');
			$status_hunian = array('status_hunian' => 'Sold Out');
			$id = array('id_hunian' => $id_hunian);
			$this->booking_model->update_data('hunian',$status_hunian,$id);

			$this->session->set_flashdata('pesan','
				<h3 style="color: green">Booking berhasil! Lanjukan untuk transaksi</h3>
				
				');
			redirect('dashboard/hunian');
		
	}

	// public function transaksi()
	// {
	// 	$users = $this->session->userdata('email');
	// 	$data['transaksi'] = $this->db->query("SELECT * FROM pesan psn, hunian hn, users usr WHERE psn.id_hunian=hn.id_hunian AND usr.email='$users' ORDER BY id_pesan DESC")->result();
	// 	$data['pesan'] = $this->pesan_model->ambil_data();
	
	// 	$data['title'] = "Bu Kost | Transaksi";
	// 		$this->load->view('templates_dashboard/header',$data);
	// 		$this->load->view('dashboard/transaksi');
	// 		$this->load->view('templates_dashboard/footer');
	// }

	// public function pembayaran($id)
	// {
	// 	$data['pembayaran'] = $this->db->query("SELECT * FROM pesan psn, hunian hn, users usr WHERE psn.id_hunian=hn.id_hunian AND psn.id_member=usr.id AND psn.id_pesan='$id' ORDER BY id_pesan DESC")->result();
	
	// 	$data['title'] = "Bu Kost | Pembayaran";
	// 		$this->load->view('templates_dashboard/header',$data);
	// 		$this->load->view('dashboard/pembayaran');
	// 		$this->load->view('templates_dashboard/footer');
	// }


	// public function pembayaran_aksi()
	// {
	// 	$id_hunian 			= $this->input->post('id_hunian');
	// 	$id_member 			= $this->input->post('id_member');
	// 	$bank 				= $this->input->post('bank');
	// 	$nama_rekening 		= $this->input->post('nama_rekening');
	// 	$nomor_rekening 	= $this->input->post('nomor_rekening');
	// 	$tanggal 			= $this->input->post('tanggal');
	// 	$nominal 			= $this->input->post('nominal');
	



	// 	$bukti_pembayaran 		= $_FILES['bukti_pembayaran']['name'];

	// 		if($bukti_pembayaran){
	// 			$config ['upload_path'] = './assets/uploads/bukti_pembayaran';
	// 			$config ['allowed_types'] = 'pdf|jpg|jpeg|png|tiff';

	// 			$this->load->library('upload', $config);

	// 			if( $this->upload->do_upload('bukti_pembayaran') ){
	// 				$bukti_pembayaran = $this->upload->data('file_name');
	// 				$this->db->set('bukti_pembayaran',$bukti_pembayaran);
	// 			}else{
	// 				echo $this->upload->display_errors();
	// 			}

	// 		}

	// 		$data = array(
	// 			'id_hunian'  		=>  $id_hunian,
	// 			'id_member'  		=>  $id_member,
	// 			'bank'  			=>  $bank,
	// 			'nama_rekening'  	=>  $nama_rekening,
	// 			'nomor_rekening' 	=>  $nomor_rekening,
	// 			'tanggal' 			=>  $tanggal,
	// 			'nominal'  			=>  $nominal,
	// 			'bukti_pembayaran'  =>  $bukti_pembayaran
	// 		);
		

	// 		$this->booking_model->insert_booking($data,'sewa');
	// 		$this->session->set_flashdata('pesan','
	// 			<h3 style="color: green">Jika bukti pembayaran Anda berhasil di upload! Admin akan segera menghubungi Anda</h3>
				
	// 			');
	// 		redirect('booking/transaksi');


	// }



	// public function hunian()
	// {
	// 	$data['kost'] = $this->kost_model->tampil_data('hunian')->result();
		
	// 	$data['title'] = "Bu Kost | Hunian";
	// 	$this->load->view('templates_dashboard/header',$data);
	// 	$this->load->view('dashboard/hunian');
	// 	$this->load->view('templates_dashboard/footer');
	// }

	

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */