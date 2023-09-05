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
	
		#tab1 td
{
			height: 100px;
		}

	</style>
</head>
<body>
<font size=2>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</font> <br>
<font size=2>POLITEKNIK NEGERI PADANG</font><br><br><br>
<div class="center">
	<h3><U>LEMBAR PERBAIKAN TUGAS AKHIR</U></h3>
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
	<tr>
		<td>Hari / Tanggal</td>
		<td>:</td>
		<td><?php echo $hari ?> / <?php echo $t ?> <?php echo $b ?> <?php echo $thn ?></td>
	</tr>
</table><br>

<br>
<table width=100% border="1" id="tab1">
	<tr>
		<th width=1%>No.</th>
		<th>Penguji</th>
		<th>Materi Perbaikan</th>
		<th>Tanda Tangan</th>

	</tr>
	<tr>
		<td align="center">1&nbsp;</td>
		<td><?php echo $ketua ?> <?php echo $g1 ?></td>
		<td><?php echo $rev1 ?></td>
		<td>&nbsp;</td>
	<tr>
		<td align="center">2&nbsp;</td>
		<td><?php echo $sekretaris ?> <?php echo $g1 ?></td>
		<td><?php echo $rev2 ?></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="center">3&nbsp;</td>
		<td><?php echo $anggota1 ?> <?php echo $g1 ?></td>
		<td><?php echo $rev3 ?></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="center">4&nbsp;</td>
		<td><?php echo $anggota2 ?> <?php echo $g1 ?></td>
		<td><?php echo $rev4 ?></td>
		<td>&nbsp;</td>
	</tr>
</table>

</body>
</html>
