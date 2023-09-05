<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prodi extends CI_Model {

	public function getProdi(){
        $query=$this->db->query("SELECT * FROM m_prodi ");
        return $query;
    }

}