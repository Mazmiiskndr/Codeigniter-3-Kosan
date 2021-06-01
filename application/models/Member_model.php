<?php 
/**
* 
*/
class Member_model extends CI_Model
{


	public function get_jumlah_member()
	{
		$sql = "SELECT count(id) as id FROM users";
		$result = $this->db->query($sql);
		return $result->row()->id;
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
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->member)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->member,$data);
	}

	function ambil_data1($email)
	{
		$this->db->where($this->email,$email);
		return $this->db->get($this->member)->row();
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// function edit_data($id,$data)
	// {
	// 	$this->db->where($this->id,$id);
	// 	return $this->db->update($this->member,$data);
	// }

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->member)->row();
	}




		
}
?>