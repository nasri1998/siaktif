<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_mahasiswa extends CI_Model {
	public function insertMahasiswa($nobp, $nama, $prodi, $angkatan, $judul){
        $query=$this->db->query("INSERT INTO m_mahasiswa VALUES(nobp = '$nobp', nama = '$nama', prodi='$prodi', angkatan = $angkatan, password = NULL, nip_pembimbing1 = NULL, nip_pembimbing2 = NULL, nip_penguji1 = NULL, nip_penguji12 = NULL, nip_penguji3 = NULL, judul = '$judul' )");
        return $query;
    }

}