<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();

        //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
      $url=base_url();
      redirect($url);
    }
    $this->load->model('M_dosen');

  }

  function index(){
        // $this->load->view('v_dashboard');

        // else 
    if($this->session->userdata('akses')=='1'){

      $data['sesnama'] = $this->session->userdata('ses_nama');
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar', $data);
      $this->load->view('admin/dashboard');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('akses')=='2'){
      if ($this->session->userdata('ses_nama') == 'kaprodi_mi') {
      $data['sesnama'] = $this->session->userdata('ses_nama');

        $this->load->view('kaprodi/header');
        $this->load->view('kaprodi/sidebar', $data);
        $this->load->view('kaprodi/dashboard_MI');
        $this->load->view('kaprodi/footer');
      }else if($this->session->userdata('ses_nama') == 'kaprodi_tk'){
      $data['sesnama'] = $this->session->userdata('ses_nama');
        
        $this->load->view('kaprodi/header');
        $this->load->view('kaprodi/sidebarTK', $data);
        $this->load->view('kaprodi/dashboard_TK');
        $this->load->view('kaprodi/footer');
      }

    }else if($this->session->userdata('akses')=='3'){
      // $img = 'path/to/image.jpg';
      // header('Content-Type: image/jpeg');
      // readfile($img);

      $data['sesnama'] = $this->session->userdata('ses_nama');
      $this->load->view('dosen/header');
      $this->load->view('dosen/sidebar', $data);
      $this->load->view('dosen/dashboard');
      $this->load->view('dosen/footer');
    }
    else{
      // if (!isset($id)) redirect('c_dosen/index');
      $sesi = $this->session->userdata('ses_id');
      $data['sesnama'] = $this->session->userdata('ses_nama');

      $list = $this->M_dosen;
        // $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

      $data['mhs'] = $list->getById($sesi);
      $data['nilai'] = $this->M_dosen->getRekapNilai($sesi);
      $data['dataDsn'] = $this->M_dosen->dataDosen($sesi);
      $data['revisi'] = $list->getRevisi($sesi);
      $data['prodi'] = $list->getProdi($sesi);

      // var_dump($data["mhs"]); die();
      // $data = [
      // 'mhs' => $dataMhs,
      // 'nilai' => $nilai,
      // 'dosen' => $dataDsn,
      // 'revisi' => $revisi,
      // ];

        // var_dump($data["nilai"]); die();
        // $data["sesi"] = $this->session->userdata('ses_id');


      // if (!$data["mhs"]) show_404();

      $this->load->view('mahasiswa/header');
      $this->load->view('mahasiswa/sidebar',$data);
    // $this->load->view('mahasiswa/dashboard');
      $this->load->view("mahasiswa/dashboard", $data);
      $this->load->view('mahasiswa/footer');
    }


  }

}

  // function input_nilai(){
  //   // function ini hanya boleh diakses oleh admin dan dosen
  //   if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
  //     $this->load->view('v_input_nilai');
  //   }else{
  //     echo "Anda tidak berhak mengakses halaman ini";
  //   }
  // }

  // function krs(){
  //   // function ini hanya boleh diakses oleh admin dan mahasiswa
  //   if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
  //     $this->load->view('v_krs');
  //   }else{
  //     echo "Anda tidak berhak mengakses halaman ini";
  //   }
  // }
  // function lhs(){
  //   // function ini hanya boleh diakses oleh admin dan mahasiswa
  //   if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
  //     $this->load->view('v_lhs');
  //   }else{
  //     echo "Anda tidak berhak mengakses halaman ini";
  //   }
  // }
