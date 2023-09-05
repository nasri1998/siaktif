
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

        <h5>Masukkan Nilai</h5>
      </div>
      <div class="card-body">




        <form action="<?php echo base_url().'c_nilai/nilai_penguji/' ?>" method="post" enctype="multipart/form-data">

          <input type="hidden" name="idsesi" value="<?php echo $sesi ?>" />
          <input type="hidden" name="nobp" value="<?php echo $mhs->nobp?>" />

          <div class="form-group">
            <!-- <label for="name">Nama*</label> -->
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
                <td align="center">I</td>
                <td>MAKALAH</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>1. Originalitas dan Kemutakhiran Makalah</td>
                <td><input class="form-control"
                  type="text" name="okm" id="okm" placeholder="" value="" /></td>
                  <td align="center">5</td>
                  <td><input class="form-control"
                    type="text" name="okmtot" id="okmtot" placeholder="" value="" readonly /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>2. Bahasa dan Tata Tulis</td>
                    <td><input class="form-control"
                      type="text" name="bt" id="bt" placeholder="" value="" /></td>
                      <td align="center">5</td>
                      <td><input class="form-control"
                        type="text" name="bttot" id="bttot" placeholder="" value="" readonly/></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>3. Relevansi Judul, Isi dan Analisa Masalah</td>
                        <td><input class="form-control"
                          type="text" name="relevansi" id="relevansi" placeholder="" value="" />
                        </td>
                        <td align="center">20</td>
                        <td><input class="form-control"
                          type="text" name="relevansitot" id="relevansitot" placeholder="" value="" readonly/></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>4. Kesimpulan dan Saran</td>
                          <td><input class="form-control"
                            type="text" name="ks" id="ks" placeholder="" value="" /></td>
                            <td align="center">5</td>
                            <td><input class="form-control"
                              type="text" name="kstot" id="kstot" placeholder="" value="" readonly/></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="right">JUMLAH</td>
                              <td>&nbsp;</td>
                              <td align="center">35</td>
                              <td><input class="form-control"
                                type="text" name="jumlahmakalah" id="jumlahmakalah" placeholder="" value=""  readonly /></td>
                              </tr>
                              <tr>
                                <td align="center">II</td>
                                <td>PRESENTASI</td>
                                <td>&nbsp;</td>
                                <td></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>1. Sikap dan Penampilan</td>
                                <td><input class="form-control"
                                  type="text" name="skp" id="skp" placeholder="" value="" /></td>
                                  <td align="center">10</td>
                                  <td><input class="form-control"
                                    type="text" name="skptot" id="skptot" placeholder="" value="" readonly/></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>2. Komunikasi dan Sistematika</td>
                                    <td><input class="form-control"
                                      type="text" name="komsis" id="komsis" placeholder="" value="" /></td>
                                      <td align="center">20</td>
                                      <td><input class="form-control"
                                        type="text" name="komsistot" id="komsistot" placeholder="" value="" readonly/></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>3. Penguasaan Materi</td>
                                        <td><input class="form-control"
                                          type="text" name="pm" id="pm" placeholder="" value="" />
                                        </div></td>
                                        <td align="center">35</td>
                                        <td><input class="form-control"
                                          type="text" name="pmtot" id="pmtot" placeholder="" value="" readonly/></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" align="right">JUMLAH</td>
                                          <td>&nbsp;</td>
                                          <td align="center">65</td>
                                          <td><input class="form-control"
                                            type="text" name="jumlahpresentasi" id="jumlahpresentasi" placeholder="" value=""  readonly /></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" align="right">NILAI AKHIR</td>
                                            <td>&nbsp;</td>
                                            <td align="center">100</td>
                                            <td><input class="form-control"
                                              type="text" name="total_nilai_penguji" id="total_nilai_penguji" placeholder="" value="" readonly/></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <div class="form-group">
                                              <label for="revisi">Revisi</label>
                                              <textarea class="form-control" name="revisi" placeholder="Masukkan Revisi..."></textarea>
                                            </div>

                                        <input class="btn btn-success" type="submit" name="btn" value="Simpan Nilai" />
                                      </div>
                                    </form>
                                  </div>
     <!--  <div class="card mb-3">
        <div class="card-header">
          <h5>Materi Penilaian</h5>
        </div>
        <div class="card-body">
          <div class="row">


            <fieldset>
              <legend>I. MAKALAH</legend>

              <div class ="row">
                <div class="col-6 col-md-5">

                  <div class="form-group">
                    <label for="okm">Originalitas dan Kemutakhiran Makalah</label>
                    <input class="form-control"
                    type="text" name="okm" id="okm" placeholder="" value="" />

                  </div>
                  <div class="form-group">
                    <label for="bt">Bahasa dan Tata Tulis</label>
                    <input class="form-control"
                    type="text" name="bt" id="bt" placeholder="" value="" />

                  </div>
                  <div class="form-group">
                    <label for="relevansi">Relevansi Judul, Isi dan Analisa Masalah</label>
                    <input class="form-control"
                    type="text" name="relevansi" id="relevansi" placeholder="" value="" />

                  </div>
                  <div class="form-group">
                    <label for="ks">Kesimpulan dan Saran</label>
                    <input class="form-control"
                    type="text" name="ks" id="ks" placeholder="" value="" />

                  </div>

                </div>
                <div class="col-6 col-md-5">


                  <div class="form-group">
                    <label for="okmtot">Originalitas dan Kemutakhiran Makalah</label>
                    <input class="form-control"
                    type="text" name="okmtot" id="okmtot" placeholder="" value="" readonly />

                  </div>
                  <div class="form-group">
                    <label for="bttot">Bahasa dan Tata Tulis</label>
                    <input class="form-control"
                    type="text" name="bttot" id="bttot" placeholder="" value="" readonly/>

                  </div>
                  <div class="form-group">
                    <label for="relevansitot">Relevansi Judul, Isi dan Analisa Masalah</label>
                    <input class="form-control"
                    type="text" name="relevansitot" id="relevansitot" placeholder="" value="" readonly/>

                  </div>
                  <div class="form-group">
                    <label for="kstot">Kesimpulan dan Saran</label>
                    <input class="form-control"
                    type="text" name="kstot" id="kstot" placeholder="" value="" readonly/>

                  </div>

                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>II. PRESENTASI</legend>
              <div class="row">
                <div class="col-6 col-md-5">
                  <div class="form-group">
                    <label for="skp">Sikap dan Penampilan</label>
                    <input class="form-control"
                    type="text" name="skp" id="skp" placeholder="" value="" />

                  </div>

                  <div class="form-group">
                    <label for="komsis">Komunikasi dan Sistematika</label>
                    <input class="form-control"
                    type="text" name="komsis" id="komsis" placeholder="" value="" />

                  </div>
                  <div class="form-group">
                    <label for="pm">Penguasaan Materi</label>
                    <input class="form-control"
                    type="text" name="pm" id="pm" placeholder="" value="" />
                  </div>
                </div>
                <div class="col-6 col-md-5">

                  <div class="form-group">
                    <label for="skptot">Sikap dan Penampilan</label>
                    <input class="form-control"
                    type="text" name="skptot" id="skptot" placeholder="" value="" readonly/>

                  </div>
                  <div class="form-group">
                    <label for="komsistot">Komunikasi dan Sistematika</label>
                    <input class="form-control"
                    type="text" name="komsistot" id="komsistot" placeholder="" value="" readonly/>

                  </div>

                  <div class="form-group">
                    <label for="pmtot">Penguasaan Materi</label>
                    <input class="form-control"
                    type="text" name="pmtot" id="pmtot" placeholder="" value="" readonly/>

                  </div>
                </div> 
              </div>
            </div>
          </fieldset>
        </div>
  
  <div class="card mb-3">
    <div class="card-header">
      <h5>Nilai Sidang</h5>
    </div>
    <div class="card-body">
      <div class="col-5">


        <div class
        <table>
          <thead>
            <tr>
              <th>header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>data</td>
            </tr>
          </tbody>
        </table>="form-group">
          <label for="jumlah">Jumlah N X B</label>
          <input class="form-control"
          type="text" name="jumlah" id="jumlah" placeholder="" value=""  readonly />
        </div>
        <div class="form-group">
          <label for="nilai">Nilai</label>
          <input class="form-control"
          type="text" name="total_nilai_penguji" id="total_nilai_penguji" placeholder="" value="" readonly/>
        </div>

        <div class="form-group">
          <label for="revisi">Revisi</label>
          <textarea class="form-control" name="revisi"></textarea>
            <!-- <input class="form-control"
            type="text" name="revisi" placeholder="" value="" /> -->
          <!-- </div>

        </div>
      </div>
    </div> -->





  </div>
        <!-- /.container-fluid
      -->
      <!-- Sticky Footer -->
      <?php $this->load->view("dosen/footer.php") ?>

      <script type="text/javascript">


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

            var totalmak = (parseFloat($("#okm").val())*5) + (parseFloat($("#bt").val())*5) + (parseFloat($("#relevansi").val())*20) + (parseFloat($("#ks").val())*5);
            $("#jumlahmakalah").val(totalmak);
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
            var totalpres = (parseFloat($("#skp").val())*10) + (parseFloat($("#komsis").val())*20) + (parseFloat($("#pm").val())*35);

            $("#jumlahpresentasi").val(totalpres); 

            var totalnilai = (total*10)/100;
            $("#total_nilai_penguji").val(totalnilai);
          });

        });


      </script>
