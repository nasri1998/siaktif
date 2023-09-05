<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kaprodi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_kaprodiTK');
		$this->load->model('M_kaprodi');

		if (empty($this->session->userdata('masuk') && ($this->session->userdata('kaprodi')))) {
			redirect('auth');
		}
	}

	function get_ajax() {
        $list = $this->M_kaprodi->get_datatables();

        // var_dump($list); die();

        // var_dump($list); die();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $item) {
            $row = array();
            $row[] = $item->nobp;
            $row[] = $item->nama;
            $row[] = $item->prodi;
            $row[] = $item->judul;
            $row[] = $item->pembimbing1;
            $row[] = $item->pembimbing2;
            $row[] = $item->penguji1;
            $row[] = $item->penguji4;
            $row[] = $item->penguji5;
            $row[] = $item->nilai_akhir;

            // add html for action
            $data[] = $row;
        }
        $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->M_kaprodi->count_all(),
                    "recordsFiltered" => $this->M_kaprodi->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }

    function get_ajaxTK() {
        $list = $this->M_kaprodiTK->get_datatables();

        // var_dump($list); die();

        // var_dump($list); die();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $item) {
            $row = array();
            $row[] = $item->nobp;
            $row[] = $item->nama;
            $row[] = $item->prodi;
            $row[] = $item->judul;
            $row[] = $item->pembimbing1;
            $row[] = $item->pembimbing2;
            $row[] = $item->penguji1;
            $row[] = $item->penguji4;
            $row[] = $item->penguji5;
            $row[] = $item->nilai_akhir;

            // add html for action
            $data[] = $row;
        }
        $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->M_kaprodiTK->count_all(),
                    "recordsFiltered" => $this->M_kaprodiTK->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }

    public function index(){
		$data['sesnama'] = $this->session->userdata('ses_nama');
		$this->load->view('kaprodi/header');
        $this->load->view('kaprodi/sidebar', $data);
        if ($this->session->userdata('ses_nama')=='kaprodi_mi') {
        $this->load->view('kaprodi/dashboard_MI');
        }else if($this->session->userdata('ses_nama')=='kaprodi_tk'){
            $this->load->view('kaprodi/dashboard_TK');
        }
        $this->load->view('kaprodi/footer');
	}

	public function getMI()
	{

		// $data['get'] = $this->M_kaprodi->dataDosen();
		$data['sesnama'] = $this->session->userdata('ses_nama');

		$this->load->view('kaprodi/header');
        $this->load->view('kaprodi/sidebar',$data);
        $this->load->view('kaprodi/footer');
        $this->load->view('kaprodi/list_mi', $data);
	}
	public function getTK()
	{

		// $data['get'] = $this->M_kaprodi->dataDosen();
		$data['sesnama'] = $this->session->userdata('ses_nama');

		$this->load->view('kaprodi/header');
        $this->load->view('kaprodi/sidebarTK',$data);
        $this->load->view('kaprodi/footer');
        $this->load->view('kaprodi/list_tk', $data);
	}
}
