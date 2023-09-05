
<!DOCTYPE html>
<html lang="en">




<div id="content-wrapper">

  <div class="container-fluid ">

    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>

    <!-- Card  -->
    <div class="card mb-3">
      <div class="card-header">

        <h5>Info Mahasiswa</h5>
      </div>
      <div class="card-body ">




        <form action="<?php echo base_url().'c_nilai/nilai_pembimbing/' ?>" method="post">
         <input type="hidden" name="idsesi" value="<?php echo $sesi ?>" />
         <input type="hidden" name="nobp" value="<?php echo $mhs->nobp?>" />

         <div class="form-group">
          <!-- <label for="name">Nama</label> -->
          <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
          type="hidden" name="nama" placeholder="" value="<?php echo $mhs->nama ?>" readonly />
          <div class="invalid-feedback">
            <?php echo form_error('name') ?>
          </div>
        </div>

        <div class="form-group">
          <!-- <label for="prodi">Prodi</label> -->
          <input class="form-control <?php echo form_error('prodi') ? 'is-invalid':'' ?>"
          type="hidden" name="prodi" placeholder="" value="<?php echo $mhs->prodi ?>" readonly />
          <div class="invalid-feedback">
            <?php echo form_error('prodi') ?>
          </div>
        </div>
        <table width="100%" border="1">
          <thead>
            <tr>
              <th>No.</th>
              <th>Materi Penilaian</th>
              <th>Nilai (1-10)</th>
              <th>Bobot (%)</th>
              <th>Nilai x Bobot</th>
            </tr>
          </thead>
          <tbody >
            <tr>
              <td>1.</td>
              <td>Sikap dan Penampilan</td>
              <td><input class="form-control"
                type="text" name="skp" id="skp" placeholder="" value="" required/></td>
                <td align="center">10</td>
                <td><input class="form-control"
                  type="text" name="skptot" id="skptot" placeholder="" value="" readonly/></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Motivasi</td>
                  <td><input class="form-control"
                    type="text" name="motivasi"  id="motivasi" placeholder="" value="" required/></td>
                    <td align="center">10</td>
                    <td><input class="form-control"
                      type="text" name="motivasitotal"  id="motivasitotal" placeholder="" value="" readonly/></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Bahasa dan Tata Tulis</td>
                      <td><input class="form-control"
                        type="text" name="bt" id="bt" placeholder="" value="" required/>
                      </td>
                      <td align="center">15</td>
                      <td><input class="form-control"
                        type="text" name="bttotal" id="bttotal" placeholder="" value="" readonly /></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Perancangan Sistem</td>
                        <td><input class="form-control"
                          type="text" name="ps" id="ps" placeholder="" value="" required/></td>
                          <td align="center">10</td>
                          <td><input class="form-control"
                            type="text" name="pstotal" id="pstotal" placeholder="" value="" readonly/></td>
                          </tr>
                          <tr>
                            <td rowspan="5">5.</td>
                            <td rowspan="5">Materi Bimbingan :
                              <ul type="circle">
                                <li> Asistensi</li>
                                <li> Bobot Masalah</li>
                                <li> Analisa Masalah</li>
                                <li> Kesimpulan dan Saran</li>
                              </ul>
                            </td>
                            <td>&nbsp;</td>
                            <td></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><input class="form-control"
                              type="text" name="asistensi" id="asistensi" placeholder="" value="" onfocus="" required/></td>
                              <td align="center">10</td>
                              <td><input class="form-control"
                                type="text" name="asistensitotal" id="asistensitotal" placeholder="" value="" readonly/></td>
                              </tr>
                              <tr>
                                <td><input class="form-control"
                                  type="text" name="bm" id="bm" placeholder="" value="" required/></td>
                                  <td align="center">5</td>
                                  <td><input class="form-control"
                                    type="text" name="bmtotal" id="bmtotal" placeholder="" value="" readonly/></td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-control"
                                      type="text" name="am" id="am" placeholder="" value="" required/></td>
                                      <td align="center">5</td>
                                      <td><input class="form-control"
                                        type="text" name="amtotal" id="amtotal" placeholder="" value="" readonly/></td>
                                      </tr>
                                      <tr>
                                        <td><input class="form-control"
                                          type="text" name="ks" id="ks" placeholder="" value="" required/></td>
                                          <td align="center">5</td>
                                          <td><input class="form-control"
                                            type="text" name="kstotal" id="kstotal" placeholder="" value="" readonly/></td>
                                          </tr>
                                          <tr>
                                            <td>6.</td>
                                            <td>Program / Sistem</td>
                                            <td><input class="form-control"
                                              type="text" name="pds" id="pds" placeholder="" value="" required/>
                                              <td align="center">30</td>
                                              <td><input class="form-control"
                                                type="text" name="pdstotal" id="pdstotal" placeholder="" value="" readonly/></td>
                                              </tr>

                                              <tr>
                                                <td colspan="2" align="right">JUMLAH</td>
                                                <td>&nbsp;</td>

                                                <td align="center">100</td>
                                                <td><input class="form-control"
                                                  type="text" name="jumlah" id="jumlah" placeholder="" value=""  readonly /></td>
                                                </tr>
                                                <tr>
                                                  <td colspan="2" align="right">NILAI PEMBIMBING</td>
                                                  <td>&nbsp;</td>

                                                  <td align="center"></td>
                                                  <td><input class="form-control"
                                                    type="text" name="total_nilai_pembimbing" id="total_nilai_pembimbing" placeholder="" value="" readonly/></td>
                                                  </tr>
                                                </tbody>
                                              </table><br>
                                            <div class="form-group">
                                              <label for="revisi">Revisi</label>
                                              <textarea class="form-control" name="revisi" placeholder="Masukkan Revisi..."></textarea>
                                            </div>
          <!-- <input class="form-control"
          type="text" name="revisi" placeholder="" value="" />
        </div>-->


                                          </div>
                                            <input class="btn btn-success" type="submit" name="btn" value="Masukkan Nilai" />


   <!--  <div class="card mb-3">
      <div class="card-header">

        <h5>Materi Penilaian</h5>
      </div>
      <div class="card-body">
        <div class ="row">
          <div class="col-6 col-md-2">

            <div class="form-group">
              <label for="skp">Sikap dan Penampilan</label>
              <input class="form-control"
              type="text" name="skp" id="skp" placeholder="" value="" />

            </div>
            <div class="form-group">
              <label for="motivasi">Motivasi</label>
              <input class="form-control"
              type="text" name="motivasi"  id="motivasi" placeholder="" value="" />

            </div>
            <div class="form-group">
              <label for="bt">Bahasa dan Tata Tulis</label>
              <input class="form-control"
              type="text" name="bt" id="bt" placeholder="" value="" />

            </div>
            <div class="form-group">
              <label for="ps">Perancangan Sistem</label>
              <input class="form-control"
              type="text" name="ps" id="ps" placeholder="" value="" />

            </div>
            <div class="form-group">
              <label for="asistensi">Asistensi</label>
              <input class="form-control"
              type="text" name="asistensi" id="asistensi" placeholder="" value="" onfocus="bm" />

            </div>




          </div>

          <div class="col-6 col-md-2">            


            <div class="form-group">
              <label for="skp">Sikap dan Penampilan</label>
              <input class="form-control"
              type="text" name="skptotal" id="skptotal" placeholder="" value="" readonly />
            </div>
            <div class="form-group">
              <label for="motivasi">Motivasi</label>
              <input class="form-control"
              type="text" name="motivasitotal"  id="motivasitotal" placeholder="" value="" readonly/>
            </div>
            <div class="form-group">
              <label for="bt">Bahasa dan Tata Tulis</label>
              <input class="form-control"
              type="text" name="bttotal" id="bttotal" placeholder="" value="" readonly />
            </div>
            <div class="form-group">
              <label for="ps">Perancangan Sistem</label>
              <input class="form-control"
              type="text" name="pstotal" id="pstotal" placeholder="" value="" readonly/>
            </div>
            <div class="form-group">
              <label for="asistensi">Asistensi</label>
              <input class="form-control"
              type="text" name="asistensitotal" id="asistensitotal" placeholder="" value="" readonly/>
            </div>
          </div>

          <fieldset style="padding:10px; margin-left:50px;">
            <legend>Materi Bimbingan</legend>
            <div class="row">
              <div class="col md-2">
                <div class="form-group">
                  <label for="bm">Bobot Masalah</label>
                  <input class="form-control"
                  type="text" name="bm" id="bm" placeholder="" value="" />

                </div>
                <div class="form-group">
                  <label for="am">Analisa Masalah</label>
                  <input class="form-control"
                  type="text" name="am" id="am" placeholder="" value="" />

                </div>
                <div class="form-group">
                  <label for="ks">Kesimpulan dan Saran</label>
                  <input class="form-control"
                  type="text" name="ks" id="ks" placeholder="" value="" />

                </div>
                <div class="form-group">
                  <label for="pds">Program / Sistem</label>
                  <input class="form-control"
                  type="text" name="pds" id="pds" placeholder="" value="" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="bm">Bobot Masalah</label>
                  <input class="form-control"
                  type="text" name="bmtotal" id="bmtotal" placeholder="" value="" readonly/>
                </div>
                <div class="form-group">
                  <label for="am">Analisa Masalah</label>
                  <input class="form-control"
                  type="text" name="amtotal" id="amtotal" placeholder="" value="" readonly/>
                </div>
                <div class="form-group">
                  <label for="ks">Kesimpulan dan Saran</label>
                  <input class="form-control"
                  type="text" name="kstotal" id="kstotal" placeholder="" value="" readonly/>
                </div>
                <div class="form-group">
                  <label for="pds">Program / Sistem</label>
                  <input class="form-control"
                  type="text" name="pdstotal" id="pdstotal" placeholder="" value="" readonly/>
                </div>
              </div>

            </div>
          </fieldset>

        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-header">
      <h5>Nilai Sidang</h5>
      </div>
      <div class="card-body">


        <div class="col-5">
          <div class="form-group">
            <label for="jumlah">Jumlah N X B </label>
            <input class="form-control"
            type="text" name="jumlah" id="jumlah" placeholder="" value=""  readonly />
          </div>

          <div class="form-group">
            <label for="nilai">Nilai</label>
            <input class="form-control"
            type="text" name="total_nilai_pembimbing" id="total_nilai_pembimbing" placeholder="" value="" readonly />
          </div>

          <div class="form-group">
            <label for="revisi">Revisi</label>
            <textarea class="form-control" name="revisi"></textarea>
          <!-- <input class="form-control"
          type="text" name="revisi" placeholder="" value="" />
        </div> --> 
      </div>
    </div>
  </div>
</form>
</div>



</div>
</div>
        <!-- /.container-fluid


      -->
      <!-- Sticky Footer -->
      <?php $this->load->view("dosen/footer.php") ?>

      <script type="text/javascript">


        $(document).ready(function(){

          $("#skp").keyup(function(){ 
            var skp  = parseFloat($("#skp").val());
            var totskp = skp * 10;
            $("#skptot").val(totskp);
          }); 

          $("#motivasi").keyup(function(){ 
            var motiv  = parseFloat($("#motivasi").val());
            var totmot = motiv * 10;
            $("#motivasitotal").val(totmot);
          });

          $("#bt").keyup(function(){ 
            var bt  = parseFloat($("#bt").val());
            var totbt = bt * 15;
            $("#bttotal").val(totbt);
          });

          $("#ps").keyup(function(){ 
            var ps  = parseFloat($("#ps").val());
            var totps = ps * 10;
            $("#pstotal").val(totps);
          });

          $("#asistensi").keyup(function(){ 
            var asist  = parseFloat($("#asistensi").val());
            var totasist = asist * 10;
            $("#asistensitotal").val(totasist);
          });

          $("#bm").keyup(function(){ 
            var bm  = parseFloat($("#bm").val());
            var totbm = bm * 5;
            $("#bmtotal").val(totbm);
          });

          $("#am").keyup(function(){ 
            var am  = parseFloat($("#am").val());
            var totam = am * 5;
            $("#amtotal").val(totam);
          });

          $("#ks").keyup(function(){ 
            var ks  = parseFloat($("#ks").val());
            var totks = ks * 5;
            $("#kstotal").val(totks);
          });

          $("#pds").keyup(function(){ 
            var pds  = parseFloat($("#pds").val());
            var totpds = pds * 30;
            $("#pdstotal").val(totpds);
            
            // var nskp = parseFloat($("#skptotal").val());
            // var nmotivasi = parseFloat($("#motivasitotal").val());
            // var nbt = parseFloat($("#bttotal").val());
            // var nps = parseFloat($("#pstotal").val());
            // var nasistensi = parseFloat($("#asistensitotal").val());
            // var nbm = parseFloat($("#bmtotal").val());
            // var nam = parseFloat($("#amtotal").val());
            // var nks = parseFloat($("#kstotal").val());
            // var npds = parseFloat($("#pdstotal").val());

            // var total = nskp+nmotivasi+nbt+nps+nasistensi+nbm+nam+nks+npds;

            // var total = totskp+totmot
            var total = (parseFloat($("#skp").val())*10) + (parseFloat($("#motivasi").val())*10) + (parseFloat($("#bt").val())*15) + (parseFloat($("#ps").val())*10) + (parseFloat($("#asistensi").val())*10) + (parseFloat($("#bm").val())*5) + (parseFloat($("#am").val())*5) + (parseFloat($("#ks").val())*5) + (parseFloat($("#pds").val())*30);
            $("#jumlah").val(total); 

            var totalnilai = (total*10)/100;
            $("#total_nilai_pembimbing").val(totalnilai);
          });




        // $("#totBayar").val(total); 
        // var diskon  = parseInt($("#diskon").val());
        // var total = harga - (harga*(diskon/100));
        // $("#totBayar").val(total); 


      }); 


    </script>