<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LOGIN</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">SELAMAT DATANG</h1>
                  </div>
                   <?php echo $this->session->flashdata('msg');?>
                  <form class="form-signin" method="post" action="<?php echo base_url().'auth/auth' ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username"  placeholder="Enter Username..." required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">

				            
                   <!-- <label for="sel1">Pilih Level:</label>
          				       <?php echo form_dropdown('level', $level, $selected_unit, ['class' => 'form-control', 'required' => 'required']) ?>
          				    </div> -->
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Masuk
                    </button>
                 	
                  </form>

                </div>
                <a href="<?php echo site_url('register') ?>"><u>Daftar</u></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

   <script>

        $("#kendaraan").change(function(){

            // variabel dari nilai combo box kendaraan
            var id_level = $("#level").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url();?>/kendaraan/get_merk",
                method : "POST",
                data : {id_kendaraan:id_kendaraan},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_merk_kendaraan+'>'+data[i].merk_kendaraan+'</option>';
                    }
                    $('#merk').html(html);

                }
            });
        });

        $("#merk").change(function(){

            // variabel dari nilai combo box kendaraan
            var id_merk = $("#merk").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url();?>/kendaraan/get_tipe",
                method : "POST",
                data : {id_merk:id_merk},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_tipe_kendaraan+'>'+data[i].tipe_kendaraan+'</option>';
                    }
                    $('#tipe').html(html);

                }
            });
        });
    </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
