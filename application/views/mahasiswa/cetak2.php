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
			height: 40px;
		}
	
		#tab1 td
{
			height: 40px;
		}
		#tab2{
			font-size: 10px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<font size=2>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</font> <br>
<font size=2>POLITEKNIK NEGERI PADANG</font><br><br><br>
<div class="center">
	<h3><U>PERNYATAAN PERBAIKAN TUGAS AKHIR</U></h3>
</div>
<hr>

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
		<td>Jurusan</td>
		<td>:</td>
		<td>TEKNOLOGI INFORMASI</td>
	</tr>
	<tr>
		<td>Program Studi</td>
		<td>:</td>
		<td><?php echo $prodi; ?></td>
	</tr>
	<tr>
		<td>Judul Tugas Akhir</td>
		<td>:</td>
		<td><?php echo $judul ?></td>
	</tr>
	
</table><br><br>
Telah memperbaiki Tugas Akhir sesuai dengan arahan penguji dan pembimbing.
<br><br>
<table width=100% border="1" id="tab1">
	<tr>
		<th width=1%>No.</th>
		<th>Nama</th>
		<th>Jabatan Penguji/Pembimbing</th>
		<th>Tanggal Periksa</th>
		<th>Tanda Tangan</th>
	</tr>
	<tr>
		<td align="center">1&nbsp;</td>
		<td><?php echo $ketua ?> <?php echo $g1 ?></td>
		<td>Ketua</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	<tr>
		<td align="center">2&nbsp;</td>
		<td><?php echo $sekretaris ?> <?php echo $g3 ?></td>
		<td>Sekretaris</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="center">3&nbsp;</td>
		<td><?php echo $anggota1 ?> <?php echo $g4 ?></td>
		<td>Anggota 1</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="center">4&nbsp;</td>
		<td><?php echo $anggota2 ?> <?php echo $g5 ?></td>
		<td>Anggota 2</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="center">5&nbsp;</td>
		<td><?php echo $pembimbing2 ?> <?php echo $g2 ?></td>
		<td>Pembimbing II</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br>
<table width=100% border="1" id="tab2">
	<thead>
		<tr>
			<th colspan="2">Diperiksa</th>
			<th colspan="2">Disetujui</th>
			<th colspan="2">Yang menyatakan</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Tanggal</td>
			<td>&nbsp;</td>
			<td>Tanggal</td>
			<td>&nbsp;</td>
			<td>Tanggal</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Oleh</td>
			<td>&nbsp;</td>
			<td>Oleh</td>
			<td>RONAL HADI, ST., M.Kom</td>
			<td>Oleh</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>Koordinator TA</td>
			<td>Jabatan</td>
			<td>Ketua Jurusan</td>
			<td>Jabatan</td>
			<td>Mahasiswa</td>
		</tr>
		<tr>
			<td>Tanda Tangan</td>
			<td>&nbsp;</td>
			<td>Tanda Tangan</td>
			<td>&nbsp;</td>
			<td>Tandan Tangan</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>
</body>
</html>





