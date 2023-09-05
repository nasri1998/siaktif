<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_prodi');
		// $this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$query_level = $this->M_prodi->getProdi();
		$level[null] = '- Pilih -';
		foreach ($query_level->result() as $lvl) {
			$level[$lvl->prodi] = $lvl->prodi;

		}
		$data = array(
			'prodi' => $level, 'selected_unit' => null,
		);

		
		$this->load->view('register/daftar', $data);
	}

	public function daftar(){
		$params = [
			'nobp' => $_POST['nobp'],
			'nama' => $_POST['nama'],
			'prodi' => $_POST['prodi'],
			'angkatan' => $_POST['angkatan'],
			'password' => $_POST['password'],
			'nip_pembimbing1' => NULL,
			'nip_pembimbing2' => NULL,
			'nip_penguji1' => NULL,
			'nip_penguji2' => NULL,
			'nip_penguji3' => NULL,
			'judul' => $_POST['judul'],
			'konfirmasi' => 'Tidak',
		];
		$this->db->insert('m_mahasiswa', $params);
		$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">Anda telah mendaftar! silahkan tunggu atau hubungi admin untuk masuk!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true"></span></button></div>');
		redirect('auth/index');
 
		// $data = array(
		// 	'nama' => $nama,
		// 	'alamat' => $alamat,
		// 	'pekerjaan' => $pekerjaan
		// 	);
		// $this->m_data->input_data($data,'user');
		// redirect('crud/index');
	}
}
