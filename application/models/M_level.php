<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_level extends CI_Model {

	public function auth_dosen($username,$password){
        $query=$this->db->query("SELECT * FROM m_dosen WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }

    function auth_mahasiswa($username,$password){
        $query=$this->db->query("SELECT * FROM m_mahasiswa WHERE nobp='$username' AND password='$password' LIMIT 1");
        return $query;
    }

    function auth_kaprodi($username,$password){
        $query=$this->db->query("SELECT * FROM m_kaprodi WHERE kode='$username' AND password='$password' LIMIT 1");
        return $query;
    }

    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE kode='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }

}