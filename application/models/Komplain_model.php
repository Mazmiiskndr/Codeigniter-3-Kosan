<?php 
/**
* 
*/
class Komplain_model extends CI_Model
{
	public $komplain	= 'komplain';
	public $id			= 'id_komplain';
	public $order		= 'ASC';

	function __construct() 
	{
		parent::__construct();
	}

	function get_site_data(){
		$query = $this->db->get('hunian', 1); 
		return $query;
	}
	public function get_jumlah_komplain()
	{
		$sql = "SELECT count(id_komplain) as id_komplain FROM komplain";
		$result = $this->db->query($sql);
		return $result->row()->id_komplain;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	function ambil_data()
	{
		$this->db->select('komplain.id_komplain, users.nama, hunian.nama_hunian, komplain.perihal, komplain.isi');
        $this->db->from('komplain');
        $this->db->join('users', 'komplain.id_member = users.id');
        $this->db->join('hunian', 'komplain.id_hunian = hunian.id_hunian');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->komplain,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->komplain)->row();//1 data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->komplain,$data);
	}

	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}



	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->komplain);
	}

}
 ?>