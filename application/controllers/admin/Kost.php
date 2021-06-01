<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {
	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

 
	public function index()
	{
		$data['title'] = 'Hunian';
		$data['kost'] = $this->kost_model->tampil_data('hunian')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kost');
		$this->load->view('templates_admin/footer');
	}
 
	public function detail_kost($id)
	{
		$data['detail'] = $this->kost_model->ambil_id_kost($id); 
		$data['title'] = 'Detail Hunian';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kost_detail');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_kost()
	{
		$data['title'] = 'Tambah Hunian';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_kost');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_kost_aksi()
	{
		$this->_rulesKost();
		if($this->form_validation->run() == false){
			$this->tambah_kost();
		}else{
			$nama_hunian 				= htmlspecialchars($this->input->post('nama_hunian'));
			$jenis_hunian 		= htmlspecialchars($this->input->post('jenis_hunian'));
			$status_hunian 			= htmlspecialchars($this->input->post('status_hunian'));
			$harga_hunian 			= htmlspecialchars($this->input->post('harga_hunian'));

			$deskripsi_hunian 		= htmlspecialchars($this->input->post('deskripsi_hunian'));
			$gambar 				= $_FILES['gambar'];

			if($gambar = ''){
  
			}else{
				$config ['upload_path'] = './assets/uploads/kost';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if( !$this->upload->do_upload('gambar') ){
					echo "Gambar Kost Gagal Diupload!";
				}else{
					$gambar = $this->upload->data('file_name');

				}
			}
 

			$data = array(
				'nama_hunian' 		=> $nama_hunian,
				'jenis_hunian' 		=> $jenis_hunian,
				'status_hunian' 	=> $status_hunian,
				'harga_hunian' 		=> $harga_hunian,
				'deskripsi_hunian' 	=> $deskripsi_hunian,
				'gambar' 			=> $gambar

			);

			$this->kost_model->insert_kost($data,'hunian');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Hunian Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kost');
		}
	}

	public function edit_kost($id)
	{
		$where = array('id_hunian' => $id);
		$data['kost'] = $this->kost_model->edit_data($where,'hunian')->result();
	
		$data['title'] = 'Update Hunian';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/hunian_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_kost_aksi()
	{
		$this->_rulesKost();
		if($this->form_validation->run() == false){
			$this->edit_hunian();
		}else{
			$id_hunian 				= $this->input->post('id_hunian');
			$nama_hunian 				= htmlspecialchars($this->input->post('nama_hunian'));
			$jenis_hunian 		= htmlspecialchars($this->input->post('jenis_hunian'));
			$status_hunian 			= htmlspecialchars($this->input->post('status_hunian'));
			$harga_hunian 			= htmlspecialchars($this->input->post('harga_hunian'));

			$deskripsi_hunian 		= htmlspecialchars($this->input->post('deskripsi_hunian'));
			$gambar 				= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/produk';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Hunian Gagal Diupload!";

				} 
			}

			$data = array(
				'nama_hunian' 		=> $nama_hunian,
				'jenis_hunian' 		=> $jenis_hunian,
				'status_hunian' 	=> $status_hunian,
				'harga_hunian' 		=> $harga_hunian,
				'deskripsi_hunian' 	=> $deskripsi_hunian

			);

			$where = array('id_hunian' => $id_hunian);

			$this->kost_model->update_data($where,$data,'hunian');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Hunian Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kost');



		} 
	}

	public function hapus_kost($id)
	{
		$where = array('id_hunian' => $id);
		$this->kost_model->hapus_data($where,'hunian');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Hunian Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/kost');
	}
 
	public function _rulesKost()
	{
		$this->form_validation->set_rules('jenis_hunian','Jenis Hunian','required');
		$this->form_validation->set_rules('nama_hunian','Nama Hunian','required');
		$this->form_validation->set_rules('harga_hunian','Harga Hunian','required');
		$this->form_validation->set_rules('deskripsi_hunian','Deksripsi Hunian Produk','required');
	}

}

/* End of file Kost.php */
/* Location: ./application/controllers/admin/Kost.php */