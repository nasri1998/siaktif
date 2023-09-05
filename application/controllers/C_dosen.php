<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dosen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_dosen');
		$this->load->model('M_pembimbing1');

		if (empty($this->session->userdata('masuk') && ($this->session->userdata('dosen')))) {
			redirect('auth');
		}
	}

	public function index(){
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$this->load->view('dosen/header');
        $this->load->view('dosen/sidebar', $data);
        $this->load->view('dosen/dashboard');
        $this->load->view('dosen/footer');
	}

	public function get_ajax() {
		$list = $this->M_pembimbing1->get_datatables();
        // var_dump($list); die();

        // var_dump($list); die();

        // var_dump($list); die();

		$data = array();
		$no = $_POST['start'];
		foreach ($list as $item) {
			$row = array();
			$row[] = $item->nobp;
			$row[] = $item->nama;
			$row[] = $item->prodi;
			$row[] = $item->angkatan;
			$row[] = $item->judul;
			$row[] = $item->pembimbing1;
			$row[] = $item->pembimbing2;
			$row[] = $item->penguji1;
			$row[] = $item->penguji4;
			$row[] = $item->penguji5;
            // add html for action
			$row[] = '<a href="'.site_url('c_dosen/v_cetak/'.$item->nobp).'" class="btn btn-primary btn-xs"><i class="fa fa-print"></i> Cetak Berita Acara</a>
			<a href="'.site_url('c_dosen/nilai/'.$item->nobp).'"  class="btn btn-danger btn-xs"><i class="fa fa-book"></i> Rekap Nilai</a>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_pembimbing1->count_all(),
			"recordsFiltered" => $this->M_pembimbing1->count_filtered(),
			"data" => $data,
			);
        // output to json format
		echo json_encode($output);

	}

	public function getMahasiswa()
	{
		// $this->db->select('x.nobp, x.nama, x.prodi, x.angkatan, x.judul, a.nip as nip1, a.nama as pembimbing1, b.nip as nip2, b.nama as pembimbing2, c.nip as nip3, c.nama as penguji1, d.nip as nip4,  d.nama as penguji4, e.nip as nip5, e.nama as penguji5')
		// ->from('m_mahasiswa as x')
		// ->join('m_dosen as a', 'x.nip_pembimbing1 = a.nip','left')
		// ->join('m_dosen as b', 'x.nip_pembimbing2 = b.nip','left')
		// ->join('m_dosen as c', 'x.nip_penguji1 = c.nip','left')
		// ->join('m_dosen as d', 'x.nip_penguji2 = d.nip','left')
		// ->join('m_dosen as e', 'x.nip_penguji3 = e.nip','left');
  //        $query = $this->db->get();


		$data['get'] = $this->M_dosen->dataMahasiswa();
        // var_dump($data); die();
		$data['sesnama'] = $this->session->userdata('ses_nama');

		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar',$data);
		$this->load->view('dosen/list_mahasiswa', $data);
		$this->load->view('dosen/footer');
	}

	public function getBeritaAcara(){
		$sesi = $this->session->userdata('ses_id');
		$data['sesnama'] = $this->session->userdata('ses_nama');

    	// var_dump($sesi); die();
		$data['get'] = $this->M_dosen->getDataMhsPenguji1($sesi);
		// $data['getnilai'] = $this->M_dosen->gettotalnilai($nobp);

		// $get = $this->load->model('m_dosen')->getDataMhsBimbingan1($sesi);
			// var_dump($data['get']); die();
		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar', $data);
		$this->load->view('dosen/rekap_nilai_ver2', $data);
		$this->load->view('dosen/footer');
	}

	public function mhs_bimbingan1(){
		// var_dump('ookokkokok'); die();
		

		$sesi = $this->session->userdata('ses_id');
    	// var_dump($sesi); die();
		$data['get'] = $this->M_dosen->getDataMhsBimbingan1($sesi);
		$data['sesnama'] = $this->session->userdata('ses_nama');


		// $get = $this->load->model('m_dosen')->getDataMhsBimbingan1($sesi);
			// var_dump($data['get']); die();
		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar',$data);
		$this->load->view('dosen/mhs_bimbingan1', $data);
		$this->load->view('dosen/footer');
	}

	public function mhs_bimbingan2(){
		// var_dump('ookokkokok'); die();
		

		$sesi = $this->session->userdata('ses_id');
    	// var_dump($sesi); die();
		$data['get'] = $this->M_dosen->getDataMhsBimbingan2($sesi);
		$data['sesnama'] = $this->session->userdata('ses_nama');


		// $get = $this->load->model('m_dosen')->getDataMhsBimbingan1($sesi);
			// var_dump($data['get']); die();
		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar', $data);
		$this->load->view('dosen/mhs_bimbingan2', $data);
		$this->load->view('dosen/footer');
	}

	public function mhs_penguji1(){
		// var_dump('ookokkokok'); die();
		

		$sesi = $this->session->userdata('ses_id');
		$data['sesnama'] = $this->session->userdata('ses_nama');

    	// var_dump($sesi); die();
		$data['get'] = $this->M_dosen->getDataMhsPenguji1($sesi);
		// $data['getnilai'] = $this->M_dosen->gettotalnilai($nobp);

		// $get = $this->load->model('m_dosen')->getDataMhsBimbingan1($sesi);
			// var_dump($data['get']); die();
		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar', $data);
		$this->load->view('dosen/mhs_penguji1', $data);
		$this->load->view('dosen/footer');
	}

	public function mhs_penguji2(){
		// var_dump('ookokkokok'); die();
		

		$sesi = $this->session->userdata('ses_id');
    	// var_dump($sesi); die();
		$data['get'] = $this->M_dosen->getDataMhsPenguji2($sesi);
		$data['sesnama'] = $this->session->userdata('ses_nama');


		// $get = $this->load->model('m_dosen')->getDataMhsBimbingan1($sesi);
			// var_dump($data['get']); die();
		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar',$data);
		$this->load->view('dosen/mhs_penguji2', $data);
		$this->load->view('dosen/footer');
	}

	public function mhs_penguji3(){
		// var_dump('ookokkokok'); die();
		

		$sesi = $this->session->userdata('ses_id');
		$data['sesnama'] = $this->session->userdata('ses_nama');

    	// var_dump($sesi); die();
		$data['get'] = $this->M_dosen->getDataMhsPenguji3($sesi);

		// $get = $this->load->model('m_dosen')->getDataMhsBimbingan1($sesi);
			// var_dump($data['get']); die();
		$this->load->view('dosen/header');
		$this->load->view('dosen/sidebar', $data);
		$this->load->view('dosen/mhs_penguji3', $data);
		$this->load->view('dosen/footer');
	}

	

	public function form_nilai_pembimbing($id = null){
		
		if (!isset($id)) redirect('c_dosen/index');
		$data['sesnama'] = $this->session->userdata('ses_nama');
		
		$list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

		$data["mhs"] = $list->getById($id);
		$data["sesi"] = $this->session->userdata('ses_id');

		if (!$data["mhs"]) show_404();
		$this->load->view("dosen/header");
		$this->load->view("dosen/sidebar",$data);
		$this->load->view("dosen/form_nilai_pembimbing", $data);

		
	}

	public function form_nilai_pembimbing2($id = null){
		
		if (!isset($id)) redirect('c_dosen/index');
		
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

		$data["mhs"] = $list->getById($id);
		$data["sesi"] = $this->session->userdata('ses_id');

		if (!$data["mhs"]) show_404();
		
		$this->load->view("dosen/form_nilai_pembimbing2", $data);

		
	}

	public function form_nilai_penguji($id = null){
		
		if (!isset($id)) redirect('c_dosen/index');
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

		$data["mhs"] = $list->getById($id);
		$data["sesi"] = $this->session->userdata('ses_id');
		

		if (!$data["mhs"]) show_404();
		
		$this->load->view("dosen/form_nilai_penguji", $data);
		
	}

	public function form_nilai_penguji2($id = null){
		
		if (!isset($id)) redirect('c_dosen/index');
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

		$data["mhs"] = $list->getById($id);
		$data["sesi"] = $this->session->userdata('ses_id');
		

		if (!$data["mhs"]) show_404();
		
		$this->load->view("dosen/form_nilai_penguji2", $data);
		
	}

	public function form_nilai_penguji3($id = null){
		
		if (!isset($id)) redirect('c_dosen/index');
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

		$data["mhs"] = $list->getById($id);
		$data["sesi"] = $this->session->userdata('ses_id');
		

		if (!$data["mhs"]) show_404();
		
		$this->load->view("dosen/form_nilai_penguji3", $data);
		
	}


	public function v_cetak($id){
		
		if (!isset($id)) redirect('c_dosen/index');
		
		$list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$data["mhs"] = $list->getById($id);
		$data["nilai"] = $this->M_dosen->getRekapNilai($id);
        // var_dump($data["nilai"]); die();
		$data["sesi"] = $this->session->userdata('ses_id');
		

		if (!$data["mhs"]) show_404();
		
		$this->load->view("dosen/v_cetak", $data);
		
	}

	public function cetak(){
		$na = $this->input->post('na');
		$nobp = $this->input->post('nobp');
		$nama = $this->input->post('nama');
		$stat = $this->input->post('status');
		$hari = $this->input->post('hari');
		$tanggal = $this->input->post('tgl');

		$ta = date('d F Y', strtotime($tanggal));
		
		$t = date('d', strtotime($tanggal));
		$b = date('F', strtotime($tanggal));
		$thn = date('Y', strtotime($tanggal));

		$dosen = $this->M_dosen->dataDosen($nobp);

	// var_dump($dosen);die();

		// var_dump($tanggal);die();
		$data = [
		'na' => $na,
		'nobp' => $nobp,
		'nama' => $nama,
		'status' => $stat,
		'hari' => $hari,
		'tanggal' => $ta,
		't' => $t,
		'b' => $b,
		'thn' => $thn,
		'dsn' => $dosen,
		];

		$this->load->library('dompdf_gen');

		$this->load->view('dosen/cetak', $data);

		$paper_size = 'A4';
		$orientation = 'portrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("berita_acara.pdf", array('Attachment' =>0));
	}

	public function nilai($nobp){
		$data['sesnama'] = $this->session->userdata('ses_nama');

		// if (!isset($nobp)) redirect('c_dosen/index');
		
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());
		$temp = $this->M_dosen->getNilai($nobp);
		// $data = ['nilai' => $temp];
		$data['nilai'] = $temp;
		// var_dump($data); die();
		// $data['nilai'] = $temp;
		$this->load->view("dosen/rekap_nilai", $data);
		
	}

	
	// 	function update(){
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$pekerjaan = $this->input->post('pekerjaan');
	
	// 	$data = array(
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'pekerjaan' => $pekerjaan
	// 	);
	
	// 	$where = array(
	// 		'id' => $id
	// 	);
	
	// 	$this->m_data->update_data($where,$data,'user');
	// 	redirect('crud/index');
	// }
}
