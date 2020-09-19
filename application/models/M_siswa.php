<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	//fungsi menampilkan data dari database
	public function get_data(){
		$this->db->select('*');
		$this->db->from("tbl_siswa");
		$this->db->order_by('id_siswa', 'DESC');

		return $this->db->get();
	}

	public function simpan($data){
		return $this->db->insert("tbl_siswa", $data);
	}

	public function edit_siswa($id){
		return $this->db->where('id_siswa', $id)->get('tbl_siswa')->row();
	}

	public function update_siswa($data,$id){
		return $this->db->update("tbl_siswa", $data, $id);
	}

	public function hapus_siswa($id_siswa){
		return $this->db->delete("tbl_siswa", $id_siswa);
	}
}
