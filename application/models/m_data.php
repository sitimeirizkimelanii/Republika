<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('news');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($data,$table){
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function tampil_data_id($id){
		$this->db->where("id", $id);
		return $this->db->get('news');
	}
	function edit_data($data,$where,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}