<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {
	private $_table="m_mahasiswa";

	public function getDataMhsBimbingan1($nip){
		$get = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi
			FROM m_mahasiswa
			JOIN m_dosen ON m_mahasiswa.nip_pembimbing1 = m_dosen.nip where m_mahasiswa.nip_pembimbing1='$nip'");
		return $get->result();
		// var_dump($get->result());
		// die();
	}

	public function getDataMhsBimbingan2($nip){
		$get = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi
			FROM m_mahasiswa
			JOIN m_dosen ON m_mahasiswa.nip_pembimbing2 = m_dosen.nip where m_mahasiswa.nip_pembimbing2='$nip'");
		return $get->result();
		
	}

	public function getDataMhsPenguji1($nip){
		$get = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi
			FROM m_mahasiswa
			JOIN m_dosen ON m_mahasiswa.nip_penguji1 = m_dosen.nip where m_mahasiswa.nip_penguji1='$nip'");
		return $get->result();
		
	}

	public function getDataMhsPenguji2($nip){
		$get = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi
			FROM m_mahasiswa
			JOIN m_dosen ON m_mahasiswa.nip_penguji2 = m_dosen.nip where m_mahasiswa.nip_penguji2='$nip'");
		return $get->result();
		
	}

	public function getDataMhsPenguji3($nip){
		$get = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi
			FROM m_mahasiswa
			JOIN m_dosen ON m_mahasiswa.nip_penguji3 = m_dosen.nip where m_mahasiswa.nip_penguji3='$nip'");
		return $get->result();
		
	}

	public function getRekapNilai($id){
		$get = $this->db->query("select * from rekap_nilai where nobp = '{$id}'");
		return $get->result();
		
	}


	public function listing(){
		$this->db->select('m_mahasiswa.nobp, m_mahasiswa.nama, m_mahasiswa.prodi');
		$this->db->from('m_mahasiswa');
		$query = $this->db->get();
		return $query->result();
	}

	public function getById($id)
	{

		return $this->db->get_where($this->_table, ["nobp" => $id])->row();
	}

	public function dataMahasiswa(){
		// $this->db->select('*');
		// $this->db->from('m_mahasiswa');
		// $query = $this->db->get();
		// return $query->result();

		$query = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama,
			m_mahasiswa.prodi,
			m_mahasiswa.angkatan,
			m_mahasiswa.judul,
			m_dosen.nip as nip1,
			m_dosen.nama as pembimbing1,
			m_dosen.gelar as gelar1,
			a.nip as nip2,
			a.nama as pembimbing2,
			a.gelar as gelar2,
			b.nip as nip3,
			b.nama as penguji1,
			b.gelar as gelar3,
			c.nip as nip4,
			c.nama as penguji4,
			c.gelar as gelar4,
			d.nip as nip5,
			d.nama as penguji5,
			d.gelar as gelar5 FROM m_mahasiswa 
			LEFT JOIN m_dosen ON m_mahasiswa.nip_pembimbing1 = m_dosen.nip
			LEFT JOIN m_dosen as a ON m_mahasiswa.nip_pembimbing2 = a.nip
			LEFT JOIN m_dosen as b ON m_mahasiswa.nip_penguji1 = b.nip
			LEFT JOIN m_dosen as c ON m_mahasiswa.nip_penguji2 = c.nip
			LEFT JOIN m_dosen as d ON m_mahasiswa.nip_penguji3 = d.nip");
			return $query->result();
	}

	public function dataDosen($nobp){
		$query = $this->db->query("SELECT m_mahasiswa.nobp, m_mahasiswa.nama,
			m_dosen.nip as nip1,
			m_dosen.nama as pembimbing1,
			m_dosen.gelar as gelar1,
			a.nip as nip2,
			a.nama as pembimbing2,
			a.gelar as gelar2,
			b.nip as nip3,
			b.nama as penguji1,
			b.gelar as gelar3,
			c.nip as nip4,
			c.nama as penguji4,
			c.gelar as gelar4,
			d.nip as nip5,
			d.nama as penguji5,
			d.gelar as gelar5 FROM m_mahasiswa 
			LEFT JOIN m_dosen ON m_mahasiswa.nip_pembimbing1 = m_dosen.nip
			LEFT JOIN m_dosen as a ON m_mahasiswa.nip_pembimbing2 = a.nip
			LEFT JOIN m_dosen as b ON m_mahasiswa.nip_penguji1 = b.nip
			LEFT JOIN m_dosen as c ON m_mahasiswa.nip_penguji2 = c.nip
			LEFT JOIN m_dosen as d ON m_mahasiswa.nip_penguji3 = d.nip
			WHERE m_mahasiswa.nobp = '{$nobp}'");
		return $query->result();
	}

	private $_table2="m_mahasiswa";
	public function getNilai($nobp){
		// $this->db->select('m_mahasiswa.nobp, nilai_pembimbing1.total_nilai_pembimbing as nilai1, nilai_pembimbing2.total_nilai_pembimbing as nilai2, nilai_penguji1.total_nilai as nilai3, nilai_penguji2.total_nilai as nilai4, nilai_penguji3.total_nilai as nilai5');
		// $this->db->from('m_mahasiswa');
		// $this->db->join('nilai_pembimbing1', 'nilai_pembimbing1.nobp = m_mahasiswa.nobp', 'nilai_pembimbing1.nip = m_mahasiswa.nip_pembimbing1');
		// $this->db->join('nilai_pembimbing2', 'nilai_pembimbing2.nobp = m_mahasiswa.nobp', 'nilai_pembimbing2.nip = m_mahasiswa.nip_pembimbing2');
		// $this->db->join('nilai_penguji1', 'nilai_penguji1.nobp = m_mahasiswa.nobp', 'nilai_penguji1.nip = m_mahasiswa.nip_penguji1');
		// $this->db->join('nilai_penguji2', 'nilai_penguji2.nobp = m_mahasiswa.nobp', 'nilai_penguji2.nip = m_mahasiswa.nip_penguji2');
		// $this->db->join('nilai_penguji3', 'nilai_penguji3.nobp = m_mahasiswa.nobp', 'nilai_penguji3.nip = m_mahasiswa.nip_penguji3');
		// $this->db->where('m_mahasiswa.nobp', $nobp);




		// $query ="SELECT nilai_pembimbing1.nobp, m_mahasiswa.nama, nilai_pembimbing1.total_nilai_pembimbing, nilai_pembimbing2.total_nilai_pembimbing, nilai_penguji1.total_nilai, nilai_penguji2.total_nilai, nilai_penguji3.total_nilai FROM nilai_pembimbing1, nilai_pembimbing2, nilai_penguji1, nilai_penguji2, nilai_penguji3
		// 	JOIN m_mahasiswa
		// 	WHERE nilai_pembimbing1.nobp = m_mahasiswa.nobp AND nilai_pembimbing2.nobp = m_mahasiswa.nobp AND nilai_penguji1.nobp = m_mahasiswa.nobp AND nilai_penguji2.nobp = m_mahasiswa.nobp AND nilai_penguji3.nobp = m_mahasiswa.nobp
		// 	AND nilai_pembimbing1.nip = m_mahasiswa.nip_pembimbing1 AND nilai_pembimbing2.nip = m_mahasiswa.nip_pembimbing2 AND nilai_penguji1.nip = m_mahasiswa.nip_penguji1 AND nilai_penguji2.nip = m_mahasiswa.nip_penguji2 AND
		// 	nilai_penguji3.nip = m_mahasiswa.nip_penguji3 
		// 	AND m_mahasiswa.nobp = '{$nobp}'";

		// // var_dump($query);die();
		// // $query = $this->db->get();

		// return $query->result();

		$get = $this->db->query("SELECT nilai_pembimbing1.nobp, m_mahasiswa.nama, nilai_pembimbing1.total_nilai_pembimbing as nilai1, nilai_pembimbing2.total_nilai_pembimbing as nilai2, nilai_penguji1.total_nilai as nilai3, nilai_penguji2.total_nilai as nilai4, nilai_penguji3.total_nilai as nilai5 FROM nilai_pembimbing1, nilai_pembimbing2, nilai_penguji1, nilai_penguji2, nilai_penguji3
			JOIN m_mahasiswa
			WHERE nilai_pembimbing1.nobp = m_mahasiswa.nobp AND nilai_pembimbing2.nobp = m_mahasiswa.nobp AND nilai_penguji1.nobp = m_mahasiswa.nobp AND nilai_penguji2.nobp = m_mahasiswa.nobp AND nilai_penguji3.nobp = m_mahasiswa.nobp
			AND nilai_pembimbing1.nip = m_mahasiswa.nip_pembimbing1 AND nilai_pembimbing2.nip = m_mahasiswa.nip_pembimbing2 AND nilai_penguji1.nip = m_mahasiswa.nip_penguji1 AND nilai_penguji2.nip = m_mahasiswa.nip_penguji2 AND
			nilai_penguji3.nip = m_mahasiswa.nip_penguji3 
			AND m_mahasiswa.nobp = '{$nobp}'");
		return $get->result();
		
		// var_dump($get); die();
	}	

	public function getRevisi($nobp){
		$get = $this->db->query("SELECT nilai_pembimbing1.nobp, m_mahasiswa.nama, nilai_pembimbing1.total_nilai_pembimbing as nilai1, nilai_pembimbing1.revisi as revisi1, nilai_pembimbing2.total_nilai_pembimbing as nilai2, nilai_penguji1.total_nilai as nilai3, nilai_penguji1.revisi as revisi2, nilai_penguji2.total_nilai as nilai4, nilai_penguji2.revisi as revisi3, nilai_penguji3.total_nilai as nilai5, nilai_penguji3.revisi as revisi4  FROM nilai_pembimbing1, nilai_pembimbing2, nilai_penguji1, nilai_penguji2, nilai_penguji3
			JOIN m_mahasiswa
			WHERE nilai_pembimbing1.nobp = m_mahasiswa.nobp AND nilai_pembimbing2.nobp = m_mahasiswa.nobp AND nilai_penguji1.nobp = m_mahasiswa.nobp AND nilai_penguji2.nobp = m_mahasiswa.nobp AND nilai_penguji3.nobp = m_mahasiswa.nobp
			AND nilai_pembimbing1.nip = m_mahasiswa.nip_pembimbing1 AND nilai_pembimbing2.nip = m_mahasiswa.nip_pembimbing2 AND nilai_penguji1.nip = m_mahasiswa.nip_penguji1 AND nilai_penguji2.nip = m_mahasiswa.nip_penguji2 AND
			nilai_penguji3.nip = m_mahasiswa.nip_penguji3 
			AND m_mahasiswa.nobp = '{$nobp}'");
		return $get->result();
	}

	public function getProdi($nobp){
		$get = $this->db->query("SELECT m_prodi.prodi, m_prodi.nama as namaprodi FROM m_prodi JOIN m_mahasiswa 
			WHERE m_prodi.prodi = m_mahasiswa.prodi AND m_mahasiswa.nobp = '{$nobp}' ");
		return $get->result();
	}
	// public function dataCetak($nobp, $nippemb1, $nippemb2, $nippeng1, $nippeng2, $nippeng3){
	// 	$this->db->select('*');
	// 	$this->db->from('m_mahasiswa');
	// 	$this->db->join('m_dosen');
	// 	$this->db->where('m_mahasiswa.nip_pembimbing1 = m_dosen.nip AND m_mahasiswa.nip_pembimbing2 = m_dosen.nip AND m_mahasiswa.nip_penguji1 = m_dosen.nip AND m_mahasiswa.nip_penguji2 = m_dosen.nip AND m_mahasiswa.nip_penguji3 = m_dosen.nip AND m_mahasiswa.nobp = '$nobp' AND m_mahasiswa.nip_pembimbing1 = '$nippemb1' AND m_mahasiswa.nip_pembimbing2 = '$nippemb2' AND m_mahasiswa.nip_penguji1 = '$nippeng1' AND m_mahasiswa.nip_penguji2 = '$nippeng2' AND m_mahasiswa.nip_penguji3 = '$nippeng3'');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	// public function dataDosen(){
	// 	$this->db->select('*');
	// 	$this->db->from('m_dosen');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

    //  public function save()
    // {
    //     $post = $this->input->post();
    //     $this->nobp = uniqid();
    //     $this->nama = $post["nama"];
    //     $this->prodi = $post["prodi"];
    //     // $this->description = $post["description"];
    //     return $this->db->insert($this->'nilai_pembimbing1', $this);
    // }

	
}
