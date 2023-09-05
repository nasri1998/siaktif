<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_admin');
		$this->load->model('M_tabel');

		if (empty($this->session->userdata('masuk') && ($this->session->userdata('admin')))) {
			redirect('auth');
		}
	}
	function get_ajax() {
        $list = $this->M_admin->get_datatables();

        // var_dump($list); die();

        // var_dump($list); die();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $item) {
            $row = array();
            $row[] = $item->nobp;
            $row[] = $item->nama;
            $row[] = $item->password;
            $row[] = $item->prodi;
            $row[] = $item->angkatan;
            $row[] = $item->judul;
            $row[] = $item->pembimbing1;
            $row[] = $item->pembimbing2;
            $row[] = $item->penguji1;
            $row[] = $item->penguji4;
            $row[] = $item->penguji5;
            $row[] = $item->konfirmasi;
            // add html for action
            $row[] = '<td><a href="'.site_url('C_admin/edit/'.$item->nobp).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a></td>
                    <td><a href="'.site_url('C_admin/hapus/'.$item->nobp).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a></td>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->M_admin->count_all(),
                    "recordsFiltered" => $this->M_admin->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }

    function get_ajaxDosen() {
        $list = $this->M_tabel->get_datatables();

        // var_dump($list); die();

        // var_dump($list); die();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $item) {
            $row = array();
            $row[] = $item->nip;
            $row[] = $item->nama;
            $row[] = $item->gelar;
            $row[] = $item->password;
            $row[] = $item->username;
            // add html for action
            // $text = str_replace(' ', '', $item->nip);
            $row[] = '<a href="'.site_url('C_admin/editDosen/'.$item->username).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="'.site_url('C_admin/hapusDosen/'.$item->username).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->M_tabel->count_all(),
                    "recordsFiltered" => $this->M_tabel->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }


	public function index(){
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$this->load->view('admin/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
	}

	public function getDosen()
	{

		$data['get'] = $this->M_admin->dataDosen();
		$data['sesnama'] = $this->session->userdata('ses_nama');

		$this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/footer');
        $this->load->view('admin/list_dosen', $data);
	}
	public function getMahasiswa()
	{

		$data['get'] = $this->M_admin->dataMahasiswa();
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$this->load->view('admin/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/footer');
        $this->load->view('admin/list_mahasiswa', $data);
	}

	public function tambah_dosen(){
		$data['sesnama'] = $this->session->userdata('ses_nama');

		$this->load->view('admin/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/tambah_dosen');
        $this->load->view('admin/footer');
	}

	public function daftarDosen(){
		$params = [
			'nip' => $_POST['nip'],
			'nidn' => NULL,
			'nama' => $_POST['nama'],
			'gelar' => $_POST['gelar'],
			'password' => $_POST['password'],
			'username' => $_POST['username'],
			'level' => 3,
		];
		$this->db->insert('m_dosen', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Telah Berhasil Ditambahkan!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect('C_admin/getDosen');
	}

	function edit($id){
		
        if (!isset($id)) redirect('c_admin/index');
		$data['sesnama'] = $this->session->userdata('ses_nama');
       	
        $list = $this->M_admin;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        $data["mhs"] = $list->getById($id);

        if (!$data["mhs"]) show_404();
        
        $this->load->view("admin/edit_mahasiswa", $data);


	}

	function editDosen($nip){
		
        if (!isset($nip)) redirect('c_admin/index');
		$data['sesnama'] = $this->session->userdata('ses_nama');
       	// $dd = $nip;
        $list = $this->M_admin;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        $data["dsn"] = $list->getByNip($nip);
       	// var_dump($data["dsn"]);die();

        if (!$data["dsn"]) show_404();
        
        $this->load->view("admin/edit_dosen", $data);


	}

	function update(){

				// $test = $this->input->post('test');

		// var_dump($nobp);
		// die();
		$nobp = $this->input->post('nobp');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$angkatan = $this->input->post('angkatan');
		$password = $this->input->post('password');
		$nip_pembimbing1 = $this->input->post('KetuaSidang');
		$nip_pembimbing2 = $this->input->post('Pembimbing2');
		$nip_penguji1 = $this->input->post('SekretarisSidang');
		$nip_penguji2 = $this->input->post('Anggota1');
		$nip_penguji3 = $this->input->post('Anggota2');
		$judul = $this->input->post('judul');
		$konfirmasi = $this->input->post('konfirmasi');
		
	 
		$data = array(
			'nama' => $nama,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'password' => $password,
			'nip_pembimbing1' => $nip_pembimbing1,
			'nip_pembimbing2' => $nip_pembimbing2,
			'nip_penguji1' => $nip_penguji1,
			'nip_penguji2' => $nip_penguji2,
			'nip_penguji3' => $nip_penguji3,
			'judul' => $judul,
			'konfirmasi' => $konfirmasi
		);
	 
		// var_dump($data);
		// die();

		$where = array(
			'nobp' => $nobp
		);
	 
		$this->M_admin->update_data($where,$data,'m_mahasiswa');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dosen Telah Berhasil Diubah!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect('C_admin/getMahasiswa');
		}

		function updateDosen(){

				// $test = $this->input->post('test');

		// var_dump($nobp);
		// die();
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$gelar = $this->input->post('gelar');
		$password = $this->input->post('password');
		$username = $this->input->post('username');
		
	 
		$data = array(
			'nidn' => NULL,
			'nama' => $nama,
			'gelar' => $gelar,
			'password' => $password,
			'username' => $username,
		);
	 
		// var_dump($data);
		// die();

		$where = array(
			'nip' => $nip
		);
	 
		$this->M_admin->update_data($where,$data,'m_dosen');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Dosen Telah Berhasil Diubah!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect('C_admin/getDosen');
		}

	function hapus($id){
		$where = array('nobp' => $id);
		$this->M_admin->hapus_data($where,'m_mahasiswa');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Telah Berhasil Dihapus!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect('c_admin/getMahasiswa');
	}

	function hapusDosen($nip){
		$where = array('username' => $nip);
		$this->M_admin->hapus_data($where,'m_dosen');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Telah Berhasil Dihapus!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect('c_admin/getDosen');
	}
}
