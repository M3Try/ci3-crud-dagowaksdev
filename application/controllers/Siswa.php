<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function index(){
		//panggil model
		$this->load->model('M_siswa');

		$data = array(
			'siswa' => $this->M_siswa->get_data());
		//panggil view
		$this->load->view('data_siswa',$data);
	}

	public function tambah(){
		$this->load->view('tambah_siswa');
	}

	public function simpan(){
		//panggil model
		$this->load->model('M_siswa');

		$data = array( 
			'nisn' 				=> $this->input->post('nisn'),
			'nama_lengkap' 		=> $this->input->post('nama_lengkap'),
			'alamat' 			=> $this->input->post('alamat')
		);

		$siswa = $this->M_siswa->simpan($data);

		if ($siswa) {
			echo "Data Berhasil Disimpan!";
		} else {
			echo "Data Gagal Disimpan";
		}
	}

	public function edit($id){
		//panggil model
		$this->load->model('M_siswa');

		$data = array('siswa' => $this->M_siswa->edit_siswa($id));
		
		//panggil view
		$this->load->view('edit_siswa', $data);

	}

	public function update(){
		//panggil model
		$this->load->model('M_siswa');

		$id['id_siswa'] = $this->input->post("id_siswa");
		$data = array( 
			'nisn' 				=> $this->input->post('nisn'),
			'nama_lengkap' 		=> $this->input->post('nama_lengkap'),
			'alamat' 			=> $this->input->post('alamat')
		);
		$siswa = $this->M_siswa->update_siswa($data,$id);

		if ($siswa) {
			echo "Data Berhasil Diupdate!";
		} else {
			echo "Data Gagal Diupdate";
		}		
	}

	public function hapus ($id){
		//panggil model
		$this->load->model('M_siswa');

		$id_siswa['id_siswa']=$id;

		$siswa = $this->M_siswa->hapus_siswa($id_siswa);

		if ($siswa) {
			echo "Data Berhasil Dihapus!";
		} else {
			echo "Data Gagal Dihapus";
		}			

	}
}
