<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }


	public function index()
	{
		$data['title'] = 'Data Member';
		$data['users'] = $this->member_model->tampil_data('users')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/member');
		$this->load->view('templates_admin/footer');
	}
 
	public function tambah_member()
	{
		$data['title'] = 'Tambah Member';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_member');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_member_aksi()
	{
		$this->_rulesMember();
		if($this->form_validation->run() == false){
			$this->tambah_member();
		}else{
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$email 				= htmlspecialchars($this->input->post('email'));
			$status 			= htmlspecialchars($this->input->post('status'));
			$password			= MD5($this->input->post('password'));
			$no_hp 				= htmlspecialchars($this->input->post('no_hp'));

			$alamat 			= htmlspecialchars($this->input->post('alamat'));

			$data = array(
				'nama' 				=> $nama,
				'email' 			=> $email,
				'password' 			=> $password,
				'status' 			=> $status,
				'no_hp' 			=> $no_hp,
				'alamat' 			=> $alamat

			);

			$this->member_model->insert_member($data,'users');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Users Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/member');
		}
	}

	public function edit_member($id)
	{
		$where = array('id' => $id);
		$data['users'] = $this->member_model->edit_data($where,'users')->result();
	
		$data['title'] = 'Update Member';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/member_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_member_aksi()
	{
		$this->_rulesMember();
		if($this->form_validation->run() == false){
			$this->tambah_member();
		}else{
			$id 				= htmlspecialchars($this->input->post('id'));
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$email 				= htmlspecialchars($this->input->post('email'));
			$status 			= htmlspecialchars($this->input->post('status'));
			$password			= MD5($this->input->post('password'));
			$no_hp 				= htmlspecialchars($this->input->post('no_hp'));

			$alamat 			= htmlspecialchars($this->input->post('alamat'));

			$data = array(
				'nama' 		=> $nama,
				'email' 	=> $email,
				'password' 	=> $password,
				'status' 	=> $status,
				'no_hp' 	=> $no_hp,
				'alamat' 	=> $alamat

			);

			$where = array('id' => $id);

			$this->member_model->update_data($where,$data,'users');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Member Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/member');



		}
	}

	public function hapus_member($id)
	{
		$where = array('id' => $id);
		$this->member_model->hapus_data($where,'users');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Member Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/member');
	}

	public function _rulesMember()
	{
		$this->form_validation->set_rules('nama','Nama Member','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('email','Email Member','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('no_hp','No. HP','required');
		$this->form_validation->set_rules('alamat','Alamat Member','required');


	}


	public function delete_member($id)
	{
		$where = array('id' => $id);
		$this->member_model->delete_data($where,'users');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Komplain Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/member');
	}


}

/* End of file Komplain.php */
/* Location: ./application/controllers/admin/Komplain.php */