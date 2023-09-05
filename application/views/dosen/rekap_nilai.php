
<!DOCTYPE html>
<html lang="en">


<?php $this->load->view("dosen/header.php") ?>



<?php $this->load->view("dosen/sidebar.php") ?>

<div id="content-wrapper">

  <div class="container-fluid">

    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>

    <!-- Card  -->
    <div class="card mb-3">
      <div class="card-header">

        <h5>Rekap Nilai</h5>
      </div>
      <div class="card-body">




        <form action="<?php echo base_url().'c_nilai/tambah_rekap/' ?>" method="post">
            <table width=50% border="1" border-collapsed cellpadding="10px">

<?php foreach ($nilai as $key) { ?>
  
          <input type="hidden" name="nobp" value="<?php echo $key->nobp ?>">
            <thead>
             
            </thead>
            <tbody>
              <tr>
                <td> <label for="">Nilai Ketua Sidang</td>
                <td><div class="form-group">
                <?php
                  $nilai1 = $key->nilai1;
                  $nilai2 = $key->nilai2;
                  $nilai3 = $key->nilai3;
                  $nilai4 = $key->nilai4;
                  $nilai5 = $key->nilai5;

                ?>
                  <input class="form-control"
                  type="text" name="nk" id="nk" placeholder="" value="<?php echo number_format($nilai1,2); ?>"  readonly />
                </div></td>
              </tr>
              <tr>
                <td><label for="">Nilai Pembimbing 2</label></td>
                <td><div class="form-group">

                  <input class="form-control"
                  type="text" name="np2" id="np2" placeholder="" value="<?php echo number_format($nilai2,2); ?>" readonly/>
                </div></td>
              </tr>

              <?php
              $aa = ($key->nilai1 + $key->nilai2)/2;
              // echo $aa;
              ?>
              <tr>
                <td><label for="">Nilai Rata - rata Pendidikan</label></td>
                <td><div class="form-group">

                  <input class="form-control"
                  type="text" name="rata1" id="rata1" placeholder="" value="<?php echo number_format($aa,2); ?>" readonly/>
                </div></td>
              </tr>



              
            </tbody>
          </table>
<br><br>
          <table width=50% border="1" border-collapsed cellpadding="10px">
            <thead>
  

            </thead>
            <tbody>
              <tr>
                <td> <label for="">Nilai Sekretaris Sidang</label></td>
                <td><div class="form-group">

                  <input class="form-control"
                  type="text" name="ns" placeholder="" value="<?php echo number_format($nilai3,2);?>" readonly/>
                </div></td>
              </tr>
              <tr>
                <td> <label for="">Nilai Anggota 1</label></td>
                <td><div class="form-group">

                  <input class="form-control"
                  type="text" name="na1" placeholder="" value="<?php echo number_format($nilai4,2);?>" readonly/>
                </div></td>
              </tr>
              <tr>
                <td> <label for="">Nilai Anggota 2</label></td>
                <td><div class="form-group">

                  <input class="form-control"
                  type="text" name="na2" placeholder="" value="<?php echo number_format($nilai5,2);?>" readonly/>
                </div></td>
              </tr>
               <?php
              $ab = ($key->nilai3 + $key->nilai4 + $key->nilai5)/3;

              // echo $aa;
              ?>
              <tr>
                <td> <label for="">Nilai Rata - rata Penguji</label></td>
                <td><div class="form-group">
                  <input class="form-control"
                  type="text" name="rata2" placeholder="" value="<?php echo number_format($ab,2); ?>" readonly/>
                </div></td>
              </tr>
            </tbody>
          </table>
<br><br>
          <table width=50% border="1" border-collapsed cellpadding="10px">

          <?php $total = ($aa + $ab)/2;

           ?>
            <thead>
            </thead>
            <tbody>
              <tr>
                <td>Nilai Akhir</td>
                <td><input class="form-control" type="text" name="total" value="<?php echo number_format($total,2); ?>" readonly=""></td>
              </tr>
            </tbody>
          </table>
<br>
          <input class="btn btn-success" type="submit" name="btn" value="Simpan Hasil Rekap" />
        </form>
      </div>

    </div>
<?php } ?>





  </div>
        <!-- /.container-fluid
      -->
      <!-- Sticky Footer -->
      <?php $this->load->view("dosen/footer.php") ?>

     <!--  <script type="text/javascript">


        $(document).ready(function(){

          $("#okm").keyup(function(){ 
            var okm  = parseFloat($("#okm").val());
            var totokm = okm * 5;
            $("#okmtot").val(totokm);
          }); 

          $("#bt").keyup(function(){ 
            var motiv  = parseFloat($("#bt").val());
            var totmot = motiv * 5;
            $("#bttot").val(totmot);
          });

          $("#relevansi").keyup(function(){ 
            var relevansi  = parseFloat($("#relevansi").val());
            var totbt = relevansi * 20;
            $("#relevansitot").val(totbt);
          });

          $("#ks").keyup(function(){ 
            var ks  = parseFloat($("#ks").val());
            var totks = ks * 5;
            $("#kstot").val(totks);
          });

          $("#skp").keyup(function(){ 
            var skp  = parseFloat($("#skp").val());
            var totskp = skp * 10;
            $("#skptot").val(totskp);
          });

          $("#komsis").keyup(function(){ 
            var komsis  = parseFloat($("#komsis").val());
            var totkomsis = komsis * 20;
            $("#komsistot").val(totkomsis);
          });

          $("#pm").keyup(function(){ 
            var pm  = parseFloat($("#pm").val());
            var totpm = pm * 35;
            $("#pmtot").val(totpm);
            var total = (parseFloat($("#okm").val())*5) + (parseFloat($("#bt").val())*5) + (parseFloat($("#relevansi").val())*20) + (parseFloat($("#ks").val())*5) + (parseFloat($("#skp").val())*10) + (parseFloat($("#komsis").val())*20) + (parseFloat($("#pm").val())*35);
            $("#jumlah").val(total); 

            var totalnilai = total/100;
            $("#total_nilai_penguji").val(totalnilai);
          });

        });


      </script> -->
