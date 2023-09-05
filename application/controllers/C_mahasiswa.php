<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_dosen');
        if (empty($this->session->userdata('masuk')) && ($this->session->userdata('mahasiswa'))) {
            redirect('auth');
        }
	}

    public function cetak(){
        // $na = $this->input->post('na');
        $nobp = $this->input->post('nobp');
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $hari = $this->input->post('hari');
        $tanggal = $this->input->post('tgl');
        $d1 = $this->input->post('pembimbing1');
        $d2 = $this->input->post('penguji1');
        $d3 = $this->input->post('penguji2');
        $d4 = $this->input->post('penguji3');
        $prodi = $this->input->post('prodi');
        $g1 = $this->input->post('gelar1');
        $g2 = $this->input->post('gelar3');
        $g3 = $this->input->post('gelar4');
        $g4 = $this->input->post('gelar5');
        $r1 = $this->input->post('rev1');
        $r2 = $this->input->post('rev2');
        $r3 = $this->input->post('rev3');
        $r4 = $this->input->post('rev4');


        $ta = date('d F Y', strtotime($tanggal));
    
        $t = date('d', strtotime($tanggal));
        $b = date('F', strtotime($tanggal));
        $thn = date('Y', strtotime($tanggal));

        $dosen = $this->M_dosen->dataDosen($nobp);

    // var_dump($dosen);die();

        // var_dump($tanggal);die();
        $data = [
                // 'na' => $na,
                'nobp' => $nobp,
                'nama' => $nama,
                'judul' => $judul,
                'hari' => $hari,
                'tanggal' => $ta,
                'ketua' => $d1,
                'sekretaris' => $d2,
                'anggota1' => $d3,
                'anggota2' => $d4,
                'prodi' => $prodi,
                't' => $t,
                'b' => $b,
                'thn' => $thn,
                'g1' => $g1,
                'g2' => $g2,
                'g3' => $g3,
                'g4' => $g4,
                'dsn' => $dosen,
                'rev1' => $r1,
                'rev2' => $r2,
                'rev3' => $r3,
                'rev4' => $r4,
                ];

        $this->load->library('dompdf_gen');

        $this->load->view('mahasiswa/cetak', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("lembar_perbaikan.pdf", array('Attachment' =>0));
    }

    public function cetak2(){
        // $na = $this->input->post('na');
        $nobp = $this->input->post('nobp');
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        // $hari = $this->input->post('hari');
        // $tanggal = $this->input->post('tgl');
        $d1 = $this->input->post('pembimbing1');
        $d2 = $this->input->post('pembimbing2');
        $d3 = $this->input->post('penguji1');
        $d4 = $this->input->post('penguji2');
        $d5 = $this->input->post('penguji3');
        $prodi = $this->input->post('prodi');
        $g1 = $this->input->post('gelar1');
        $g2 = $this->input->post('gelar2');
        $g3 = $this->input->post('gelar3');
        $g4 = $this->input->post('gelar4');
        $g5 = $this->input->post('gelar5');
        $r1 = $this->input->post('rev1');
        $r2 = $this->input->post('rev2');
        $r3 = $this->input->post('rev3');
        $r4 = $this->input->post('rev4');


        // $ta = date('d F Y', strtotime($tanggal));
    
        // $t = date('d', strtotime($tanggal));
        // $b = date('F', strtotime($tanggal));
        // $thn = date('Y', strtotime($tanggal));

        $dosen = $this->M_dosen->dataDosen($nobp);

    // var_dump($dosen);die();

        // var_dump($tanggal);die();
        $data = [
                // 'na' => $na,
                'nobp' => $nobp,
                'nama' => $nama,
                'judul' => $judul,
                // 'hari' => $hari,
                // 'tanggal' => $ta,
                'ketua' => $d1,
                'pembimbing2' => $d2,
                'sekretaris' => $d3,
                'anggota1' => $d4,
                'anggota2' => $d5,
                'prodi' => $prodi,
                // 't' => $t,
                // 'b' => $b,
                // 'thn' => $thn,
                'g1' => $g1,
                'g2' => $g2,
                'g3' => $g3,
                'g4' => $g4,
                'g5' => $g5,
                'dsn' => $dosen,
                'rev1' => $r1,
                'rev2' => $r2,
                'rev3' => $r3,
                'rev4' => $r4,
                ];

        $this->load->library('dompdf_gen');

        $this->load->view('mahasiswa/cetak2', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("lembar_pernyataan.pdf", array('Attachment' =>0));
    }
	// public function index()
	// {
	// 	if (!isset($id)) redirect('c_dosen/index');
 //       $sesi = $this->session->userdata('ses_id');

 //        $list = $this->M_dosen;
 //        // $validation = $this->form_validation;
 //        // $validation->set_rules($product->rules());

 //        $data['mhs'] = $list->getById($sesi);
 //        $data['nilai'] = $this->M_dosen->getRekapNilai($sesi);
 //        $data['dataDsn'] = $this->M_dosen->dataDosen($sesi);
 //        $data['revisi'] = $list->getRevisi($sesi);

 //        // $data = [
 //        // 	'mhs' => $dataMhs,
 //        // 	'nilai' => $nilai,
 //        // 	'dosen' => $dataDsn,
 //        // 	'revisi' => $revisi,
 //        // ];

 //        // var_dump($data["nilai"]); die();
 //        // $data["sesi"] = $this->session->userdata('ses_id');
        

 //        if (!$data["mhs"]) show_404();
        
 //        $this->load->view("mahasiswa/dashboard", $data);
	// }


}
