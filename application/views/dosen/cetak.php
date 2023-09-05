<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css" media="screen">
		.center {
	 	 text-align: center;
		}
		.tanggal{
			text-align: left;

			margin-left: 70%;
		}
		.height{
			height: 80px;
		}

	</style>
</head>
<body>
<font size=2>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</font> <br>
<font size=2>POLITEKNIK NEGERI PADANG</font><br><br><br>
<div class="center">
	<h3>BERITA ACARA SIDANG TUGAS AKHIR MAHASISWA</h3>
	<h3>JURUSAN TEKNOLOGI INFORMASI</h3>
</div>
<hr>

Pada hari ini <?php echo $hari ?> tanggal <?php echo $t ?> bulan <?php echo $b; ?> tahun <?php echo $thn ?> <br>
Telah dilaksanakan sidang tugas akhir mahasiswa berikut : <br><br>

<?php foreach ($dsn as $value => $key) { ?>

<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $nama ?></td>
	</tr>
	<tr>
		<td>No.BP</td>
		<td>:</td>
		<td><?php echo $nobp ?></td>
	</tr>
	<tr>
		<td>Judul Tugas Akhir</td>
		<td>:</td>
		<td>Sistem Nilai Sidang Tugas Akhir</td>
	</tr>
</table><br><br>
Dengan hasil keputusan tim penguji bahwa mahasiswa tersebut diatas : 
<table>
	<tr>
		<td>Dinyatakan</td>
		<td>:</td>
		<td><?php echo $status ?></td>
	</tr>
	<tr>
		<td>Dengan nilai</td>
		<td>:</td>
		<td><?php echo $na ?></td>
	</tr>
</table><br>
<div class="tanggal">
	Padang, <?php  echo $t ?> <?php echo $b?> <?php echo $thn ?> <br>
	Tim Penguji Tugas Akhir
</div>
<br><br><br><br>
<table width=100%>
	<tr>
		<td width=70%>Ketua</td>
		<td>Sektretaris</td>
	</tr>
	<tr>
		<td class="height">&nbsp;</td>
		<td class="height">&nbsp;</td>
	<tr>
		<td> <?php echo $key->pembimbing1 ?></td>
		<td> <?php echo $key->penguji1 ?></td>
	</tr>
	<tr>
		<td><?php echo $key->gelar1 ?></td>
		<td><?php echo $key->gelar3 ?></td>
	</tr>
	<tr>
		<td><?php echo $key->nip1 ?></td>
		<td><?php echo $key->nip3 ?></td>
	</tr>
</table>
<br><br>
<table width=100% border="0">
	<tr>
		<td colspan="5"><b>Anggota Tim Penguji</b></td>
	</tr>
	<tr>
		<td>1. </td>
		<td width=1%>Nama</td>
		<td width=1%>:</td>
		<td width=60%><?php echo $key->penguji4 ?> <?php echo $key->gelar4 ?></td>
		<td width=30%>Tanda Tangan :...........</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Nip</td>
		<td>:</td>
		<td><?php echo $key->nip4 ?></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>2. </td>
		<td width=1%>Nama</td>
		<td width=1%>:</td>
		<td width=60%><?php echo $key->penguji5 ?> <?php echo $key->gelar5 ?></td>
		<td>Tanda Tangan :...........</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Nip</td>
		<td>:</td>
		<td><?php echo $key->nip5 ?></td>
		<td>&nbsp;</td>
	</tr>
	
</table>
</body>
</html>
<?php } ?>