<?php
if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');
// defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_level');
	}

	public function index()
	{

		$this->load->view('auth/index');
		// $this->form_validation->set_rules('username','Username','trim|required');
		// $this->form_validation->set_rules('password','Password','trim|required');

		// // $query_level = $this->M_level->get();
		// // $level[null] = '- Pilih -';
		// // foreach ($query_level->result() as $lvl) {
		// // 	$level[$lvl->id_level] = $lvl->level;

		// // }
		// // $data = array(
		// // 	'level' => $level, 'selected_unit' => null,
		// // );

		// if ($this->form_validation->run() == false) {

		// 	$this->load->view('auth/index');
		// } else {
		// 	$this->_login();
		// }
	}


	function auth(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek_dosen=$this->M_level->auth_dosen($username,$password);
		$cek_mahasiswa=$this->M_level->auth_mahasiswa($username,$password);
        $cek_kaprodi=$this->M_level->auth_kaprodi($username,$password);
        $cek_admin=$this->M_level->auth_admin($username,$password);

 		// 
 		// 	}else 

 			if($cek_admin->num_rows() > 0) { //jika login sebagai admin
 				$data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
 				$this->session->set_userdata('admin',TRUE);
                 if($data['level']=='1'){ //Akses admin
                 	$this->session->set_userdata('akses','1');
                 	$this->session->set_userdata('ses_id',$data['kode']);
                 	$this->session->set_userdata('ses_nama',$data['username']);
                 	redirect('page');
                 }
 			}else if($cek_kaprodi->num_rows() > 0) { //jika login sebagai kaprodi
                 $data=$cek_kaprodi->row_array();
                 $this->session->set_userdata('masuk',TRUE);
                 $this->session->set_userdata('kaprodi',TRUE);
                 if($data['level']=='2'){ //Akses admin
                  $this->session->set_userdata('akses','2');
                  $this->session->set_userdata('ses_id',$data['prodi']);
                  $this->session->set_userdata('ses_nama',$data['kode']);
                  redirect('page');
              }
             }else if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
                 $data=$cek_dosen->row_array();
                 $this->session->set_userdata('masuk',TRUE);
                 $this->session->set_userdata('dosen',TRUE);
                 if($data['level']=='3'){ //Akses dosen
                 	$data_session = array(
                 		'nama' => $username,

                 		);
                 	$this->session->set_userdata('akses','3');
                 	$this->session->set_userdata('ses_id',$data['nip']);
                 	$this->session->set_userdata('ses_nama',$data['nama']);
                 	redirect('page');
                 }
        	}else{ //jika login sebagai mahasiswa

        		if($cek_mahasiswa->num_rows() > 0){
        			$data=$cek_mahasiswa->row_array();
                            // var_dump($data);die();
        			if ($data['konfirmasi']=='Ya') {

                        $this->session->set_userdata('masuk',TRUE);
        				$this->session->set_userdata('mahasiswa',TRUE);
        				$this->session->set_userdata('akses','4');
        				$this->session->set_userdata('ses_id',$data['nobp']);
        				$this->session->set_userdata('ses_nama',$data['nama']);
        				redirect('page');
        			}else{
        				$url=base_url();
                     echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum diberi Ijin! Harap hubungi admin!
                       <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true"></span></button></div>');
                     redirect($url);
                 }
                    }else{  // jika username dan password tidak ditemukan atau salah
                    	$url=base_url();
                    	echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Salah! 
                           <button type="buton" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true"></span></button></div>');
                    	redirect($url);
                    }

                }


            }

            function logout(){
            	$this->session->sess_destroy();
            	$url=base_url('');
            	redirect($url);
            }



// 	private function _login(){
// 		$username = $this->input->post('username');
// 		$password = $this->input->post('password');
// 		$combo = $this->selected->post('level');
// 		$pass = md5($password);

// 		$user = $this->db->get_where('ref_mahasiswa', ['username' => $username])->row_array();


// 		if ($user) {
// 			if ($user['is_active'] == 1) {
// 				if ($pass == $user['password']) {
// 					$data2 = [
// 						'username' => $user['username'],
// 					];
// 					$this->session->set_userdata($data2);

// 					redirect(base_url('mahasiswa'));
// 				}else{
// 					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
// 					redirect(base_url('auth'));
// 				}
// 			}
// 		}else{
// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
// 			redirect('auth');


// 		}
// 	}
        }
