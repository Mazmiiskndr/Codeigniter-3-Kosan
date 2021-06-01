<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {
	public function get_jumlah_booking()
	{
		$sql = "SELECT count(id_pesan) as id_pesan FROM hunian";
		$result = $this->db->query($sql);
		return $result->row()->id_pesan;
	}
	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('transaksi',array('id_transaksi' => $id));
		return $query->row_array();
	}



	public function tampil_data($table)
	{
			return $this->db->get($table);
	}

	public function ambil_id_kost($id)
	{
		$result = $this->db->where('id_hunian',$id)->get('hunian');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function ambil_id_transaksi($id)
	{
		$result = $this->db->where('id_transaksi',$id)->get('transaksi');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function insert_booking($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}



}

/* End of file Kost_model.php */
/* Location: ./application/models/Kost_model.php */