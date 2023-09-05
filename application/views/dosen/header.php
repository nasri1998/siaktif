<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dosen - <?=$this->uri->segment('2') == 'mhs_bimbingan1' ? 'Ketua Sidang' : ($this->uri->segment('2') == 'mhs_bimbingan2' ? 'Pembimbing 2' : ($this->uri->segment('2') == 'mhs_penguji1' ? 'Sekretaris Sidang' : ($this->uri->segment('2') == 'mhs_penguji2' ? 'Anggota 1' : ($this->uri->segment('2') == 'mhs_penguji3' ? 'Anggota 2' : ($this->uri->segment('1') == 'page' ? 'Dashboard' :  'Masukkan Nilai'))))) ?></title>

  <!-- Custom fonts for this template-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
   <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>