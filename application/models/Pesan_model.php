<?php 
/**
* 
*/
class Pesan_model extends CI_Model
{
	public $pesan		= 'pesan';
	public $id			= 'id_pesan';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}
	public function get_jumlah_pesan()
	{
		$sql = "SELECT count(id_pesan) as id_pesan FROM pesan";
		$result = $this->db->query($sql);
		return $result->row()->id_member;
	}

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_member($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function ambil_data()
	{
		$this->db->select('pesan.id_pesan, users.nama, users.no_hp, hunian.nama_hunian, pesan.tanggal_mulai, pesan.durasi,pesan.status_pembayaran');
        $this->db->from('pesan');
        $this->db->join('users', 'pesan.id_member = users.id');
        $this->db->join('hunian', 'pesan.id_hunian = hunian.id_hunian');
		$query = $this->db->get();
		return $query->result();
	}

	// function edit_data($id,$data)
	// {
	// 	$this->db->where($this->id,$id);
	// 	return $this->db->update($this->pesan,$data);
	// }

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan)->row();//1 data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}

}
 ?>