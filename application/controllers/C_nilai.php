<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_nilai extends CI_Controller {

	public function nilai_pembimbing(){
		$params = [
			'nobp' => $_POST['nobp'],
			'nip' => $_POST['idsesi'],
			'sikap_penampilan' => $_POST['skp'],
			'motivasi' => $_POST['motivasi'],
			'bahasa_tatatulis' =>  $_POST['bt'],
			'perancangan_sistem' => $_POST['ps'],
			'asistensi' => $_POST['asistensi'],
			'bobot_masalah' => $_POST['bm'],
			'analisa_masalah' => $_POST['am'],
			'kesimpulan_Saran' => $_POST['ks'],
			'program_sistem' => $_POST['pds'],
			'nilai_pembimbing' => $_POST['jumlah'],
			'revisi' => $_POST['revisi'],
			'total_sikap_penampilan' => $_POST['skptotal'],
			'total_motivasi' => $_POST['motivasitotal'],
			'total_bahasa_tatatulis' =>  $_POST['bttotal'],
			'total_perancangan_sistem' => $_POST['pstotal'],
			'total_asistensi' => $_POST['asistensitotal'],
			'total_bobot_masalah' => $_POST['bmtotal'],
			'total_analisa_masalah' => $_POST['amtotal'],
			'total_kesimpulan_Saran' => $_POST['kstotal'],
			'total_program_sistem' => $_POST['pdstotal'],
			'total_nilai_pembimbing' => $_POST['total_nilai_pembimbing'],
		];
		// var_dump($params);die();
		$this->db->insert('nilai_pembimbing1', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Nilai Telah Berhasil Dimasukkan!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect(site_url('page'));
	}

	public function nilai_pembimbing2(){
		$params = [
			'nobp' => $_POST['nobp'],
			'nip' => $_POST['idsesi'],
			'sikap_penampilan' => $_POST['skp'],
			'motivasi' => $_POST['motivasi'],
			'bahasa_tatatulis' =>  $_POST['bt'],
			'perancangan_sistem' => $_POST['ps'],
			'asistensi' => $_POST['asistensi'],
			'bobot_masalah' => $_POST['bm'],
			'analisa_masalah' => $_POST['am'],
			'kesimpulan_Saran' => $_POST['ks'],
			'program_sistem' => $_POST['pds'],
			'nilai_pembimbing' => $_POST['jumlah'],
			'total_sikap_penampilan' => $_POST['skptotal'],
			'total_motivasi' => $_POST['motivasitotal'],
			'total_bahasa_tatatulis' =>  $_POST['bttotal'],
			'total_perancangan_sistem' => $_POST['pstotal'],
			'total_asistensi' => $_POST['asistensitotal'],
			'total_bobot_masalah' => $_POST['bmtotal'],
			'total_analisa_masalah' => $_POST['amtotal'],
			'total_kesimpulan_Saran' => $_POST['kstotal'],
			'total_program_sistem' => $_POST['pdstotal'],
			'total_nilai_pembimbing' => $_POST['total_nilai_pembimbing'],
		];
		// var_dump($params);die();
		$this->db->insert('nilai_pembimbing2', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Nilai Telah Berhasil Dimasukkan!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect(site_url('page'));
	}

	public function nilai_penguji(){
		$params = [
			'nobp' => $_POST['nobp'],
			'nip' => $_POST['idsesi'],
			'originalitas_kemutakhiran_makalah' => $_POST['okm'],
			'bahasa_tatatulis' => $_POST['bt'],
			'relevansi_judul_isi_analisa' =>  $_POST['relevansi'],
			'kesimpulan_saran' => $_POST['ks'],
			'sikap_penampilan' => $_POST['skp'],
			'komunikasi_sistematika' => $_POST['komsis'],
			'penguasaan_materi' => $_POST['pm'],
			'nilai_penguji' => $_POST['jumlah'],
			'revisi' => $_POST['revisi'],
			'total_originalitas_kemutakhiran' => $_POST['okmtot'],
			'total_bahasa_tatatulis' => $_POST['bttot'],
			'total_relevansi' => $_POST['relevansitot'],
			'total_kesimpulan_saran' => $_POST['kstot'],
			'total_sikap_penampilan' =>  $_POST['skptot'],
			'total_komunikasi_sistematika' => $_POST['komsistot'],
			'total_penguasaan_materi' => $_POST['pmtot'],
			'total_nilai' => $_POST['total_nilai_penguji'],
		];
		// var_dump($params);die();
		$this->db->insert('nilai_penguji1', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Nilai Telah Berhasil Dimasukkan!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect(site_url('page'));
	}

	public function nilai_penguji2(){
		$params = [
			'nobp' => $_POST['nobp'],
			'nip' => $_POST['idsesi'],
			'originalitas_kemutakhiran_makalah' => $_POST['okm'],
			'bahasa_tatatulis' => $_POST['bt'],
			'relevansi_judul_isi_analisa' =>  $_POST['relevansi'],
			'kesimpulan_saran' => $_POST['ks'],
			'sikap_penampilan' => $_POST['skp'],
			'komunikasi_sistematika' => $_POST['komsis'],
			'penguasaan_materi' => $_POST['pm'],
			'nilai_penguji' => $_POST['jumlah'],
			'revisi' => $_POST['revisi'],
			'total_originalitas_kemutakhiran' => $_POST['okmtot'],
			'total_bahasa_tatatulis' => $_POST['bttot'],
			'total_relevansi' => $_POST['relevansitot'],
			'total_kesimpulan_saran' => $_POST['kstot'],
			'total_sikap_penampilan' =>  $_POST['skptot'],
			'total_komunikasi_sistematika' => $_POST['komsistot'],
			'total_penguasaan_materi' => $_POST['pmtot'],
			'total_nilai' => $_POST['total_nilai_penguji'],
		];
		// var_dump($params);die();
		$this->db->insert('nilai_penguji2', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Nilai Telah Berhasil Dimasukkan!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect(site_url('page'));
	}

	public function nilai_penguji3(){
		$params = [
			'nobp' => $_POST['nobp'],
			'nip' => $_POST['idsesi'],
			'originalitas_kemutakhiran_makalah' => $_POST['okm'],
			'bahasa_tatatulis' => $_POST['bt'],
			'relevansi_judul_isi_analisa' =>  $_POST['relevansi'],
			'kesimpulan_saran' => $_POST['ks'],
			'sikap_penampilan' => $_POST['skp'],
			'komunikasi_sistematika' => $_POST['komsis'],
			'penguasaan_materi' => $_POST['pm'],
			'nilai_penguji' => $_POST['jumlah'],
			'revisi' => $_POST['revisi'],
			'total_originalitas_kemutakhiran' => $_POST['okmtot'],
			'total_bahasa_tatatulis' => $_POST['bttot'],
			'total_relevansi' => $_POST['relevansitot'],
			'total_kesimpulan_saran' => $_POST['kstot'],
			'total_sikap_penampilan' =>  $_POST['skptot'],
			'total_komunikasi_sistematika' => $_POST['komsistot'],
			'total_penguasaan_materi' => $_POST['pmtot'],
			'total_nilai' => $_POST['total_nilai_penguji'],
		];
		// var_dump($params);die();
		$this->db->insert('nilai_penguji3', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Nilai Telah Berhasil Dimasukkan!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect(site_url('page'));
	}

	public function tambah_rekap(){
		$params = [
			'nobp' => $_POST['nobp'],
			'total_nilai_pembimbing1' => $_POST['nk'],
			'total_nilai_pembimbing2' => $_POST['np2'],
			'total_nilai_penguji1' => $_POST['ns'],
			'total_nilai_penguji2' => $_POST['na1'],
			'total_nilai_penguji3' => $_POST['na2'],
			'nilai_akhir' => $_POST['total'],
		];
		$this->db->insert('rekap_nilai', $params);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Nilai Telah Berhasil Direkap!
			<button type="buton" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">%times;</span></button></div>');
		redirect(site_url('page'));
	}
	// public function cetak(){
	// 	$nobp = $this->input->post('nobp');
	// 	$nip_pembimbing1 = $this->input->post('nip_pembimbing1');
	// 	$nip_pembimbing2 = $this->input->post('nip_pembimbing2');
	// 	$nip_penguji1 = $this->input->post('nip_penguji1');
	// 	$nip_penguji2 = $this->input->post('nip_penguji2');
	// 	$nip_penguji3 = $this->input->post('nip_penguji3');

	// 	$cekdata = $this->M_dosen->dataCetak($nobp, $nip_pembimbing1, $nip_pembimbing2, $nip_penguji1, $nip_penguji2, $nip_penguji3);
	// }
}
