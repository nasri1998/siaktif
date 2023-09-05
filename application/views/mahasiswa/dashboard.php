


<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->


  <!-- Content Row -->

  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-10 col-lg-10">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->

        <!-- Card Body -->

        <!-- Pie Chart -->

      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Content Column -->

        <div class="col-lg-12 mb-4">

          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">

              <h1 class="h3 mb-0 text-gray-800">Lembar Perbaikan</h1>
             <!--  <div class="card-body">
                <a href="<?php echo base_url('C_upload'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> CETAK LEMBAR PERBAIKAN</a>
              </div> -->
                

            
              <form action="<?php echo base_url('c_mahasiswa/cetak/'.$mhs->nobp) ?>" method="post">

              <input type="hidden" name="nobp" value="<?php echo $mhs->nobp?>" />
              <input type="hidden" name="nama" value="<?php echo $mhs->nama?>" />
              <input type="hidden" name="nip_pembimbing1" value="<?php echo $mhs->nip_pembimbing1?>" />
              <input type="hidden" name="nip_penguji1" value="<?php echo $mhs->nip_penguji1?>" />
              <input type="hidden" name="nip_penguji2" value="<?php echo $mhs->nip_penguji2?>" />
              <input type="hidden" name="nip_penguji2" value="<?php echo $mhs->nip_penguji2?>" />
              <input type="hidden" name="judul" value="<?php echo $mhs->judul?>" /> <br>
              <?php foreach ($dataDsn as $value => $key): ?>
              <input type="hidden" name="pembimbing1" value="<?php echo $key->pembimbing1?>" />
              <input type="hidden" name="penguji1" value="<?php echo $key->penguji1?>" />
              <input type="hidden" name="penguji2" value="<?php echo $key->penguji4?>" />
              <input type="hidden" name="penguji3" value="<?php echo $key->penguji5?>" />
              <input type="hidden" name="gelar1" value="<?php echo $key->gelar1?>" />
              <input type="hidden" name="gelar3" value="<?php echo $key->gelar3?>" />
              <input type="hidden" name="gelar4" value="<?php echo $key->gelar4?>" />
              <input type="hidden" name="gelar5" value="<?php echo $key->gelar5?>" />
              <?php endforeach ?>
              <?php foreach ($revisi as $value => $i): ?>

              <input type="hidden" name="rev1" value="<?php echo $i->revisi1?>" />
              <input type="hidden" name="rev2" value="<?php echo $i->revisi2?>" />
              <input type="hidden" name="rev3" value="<?php echo $i->revisi3?>" />
              <input type="hidden" name="rev4" value="<?php echo $i->revisi4?>" />
              <?php endforeach ?>
              <?php foreach ($prodi as $value => $pro): ?>
                
              <input type="hidden" name="prodi" value="<?php echo $pro->namaprodi ?>">
              <?php endforeach ?>
                
  
                <div class="form-group">
                  <label for="">Hari</label>
                  <input class="form-control"
                  type="text" name="hari" placeholder="" value=""/>

                </div>
                <div class="form-group">
                  <label for="tgl">Tanggal Sidang</label>
                  <input class="form-control" type="date" name="tgl" placeholder="" value="" />
                  <div class="invalid-feedback">
                    <?php echo form_error('name') ?>
                  </div>
                </div>
                <input class="btn btn-success" type="submit" name="btn" value="Unduh" />
              </form>
            </div>

            <!-- Approach -->


          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">

              <h1 class="h3 mb-0 text-gray-800">Pernyataan Perbaikan</h1>
             <!--  <div class="card-body">
                <a href="<?php echo base_url('C_upload'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> CETAK LEMBAR PERBAIKAN</a>
              </div> -->
                

            
              <form action="<?php echo base_url('c_mahasiswa/cetak2/'.$mhs->nobp) ?>" method="post">

              <input type="hidden" name="nobp" value="<?php echo $mhs->nobp?>" />
              <input type="hidden" name="nama" value="<?php echo $mhs->nama?>" />
              <input type="hidden" name="nip_pembimbing1" value="<?php echo $mhs->nip_pembimbing1?>" />
              <input type="hidden" name="nip_penguji1" value="<?php echo $mhs->nip_penguji1?>" />
              <input type="hidden" name="nip_penguji2" value="<?php echo $mhs->nip_penguji2?>" />
              <input type="hidden" name="nip_penguji2" value="<?php echo $mhs->nip_penguji2?>" />
              <input type="hidden" name="judul" value="<?php echo $mhs->judul?>" /> <br>
              <?php foreach ($dataDsn as $value => $key): ?>
              <input type="hidden" name="pembimbing1" value="<?php echo $key->pembimbing1?>" />
              <input type="hidden" name="pembimbing2" value="<?php echo $key->pembimbing2?>" />
              <input type="hidden" name="penguji1" value="<?php echo $key->penguji1?>" />
              <input type="hidden" name="penguji2" value="<?php echo $key->penguji4?>" />
              <input type="hidden" name="penguji3" value="<?php echo $key->penguji5?>" />
              <input type="hidden" name="gelar1" value="<?php echo $key->gelar1?>" />
              <input type="hidden" name="gelar2" value="<?php echo $key->gelar2?>" />
              <input type="hidden" name="gelar3" value="<?php echo $key->gelar3?>" />
              <input type="hidden" name="gelar4" value="<?php echo $key->gelar4?>" />
              <input type="hidden" name="gelar5" value="<?php echo $key->gelar5?>" />
              <?php endforeach ?>
              <?php foreach ($revisi as $value => $i): ?>

              <input type="hidden" name="rev1" value="<?php echo $i->revisi1?>" />
              <input type="hidden" name="rev2" value="<?php echo $i->revisi2?>" />
              <input type="hidden" name="rev3" value="<?php echo $i->revisi3?>" />
              <input type="hidden" name="rev4" value="<?php echo $i->revisi4?>" />
              <?php endforeach ?>
              <?php foreach ($prodi as $value => $pro): ?>
                
              <input type="hidden" name="prodi" value="<?php echo $pro->namaprodi ?>">
              <?php endforeach ?>
                
  
                <!-- <div class="form-group">
                  <label for="">Hari</label>
                  <input class="form-control"
                  type="text" name="hari" placeholder="" value=""/>

                </div>
                <div class="form-group">
                  <label for="tgl">Tanggal Sidang</label>
                  <input class="form-control" type="date" name="tgl" placeholder="" value="" />
                  <div class="invalid-feedback">
                    <?php echo form_error('name') ?>
                  </div>
                </div> -->
                <input class="btn btn-success" type="submit" name="btn" value="Unduh" />
              </form>
            </div>

            <!-- Approach -->


          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <!-- End of Footer -->

  </div>
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2020</span>
      </div>
    </div>
  </footer>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo base_url().'auth/logout' ?>">Logout</a>
      </div>
    </div>
  </div>
</div>
