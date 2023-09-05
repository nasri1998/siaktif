        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->

          </div>

          <!-- Content Row -->
          
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->

                <!-- Card Body -->

                <!-- Pie Chart -->

              </div>

              <!-- Content Row -->


              <!-- Content Column -->

              <div class="col-lg-13">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">List Data Akun Mahasiswa</h6>
                  </div>
                  <div class="card-body">
                   <div class="table-responsive">
                    <table class="table" id="table">
                      <thead class="thead-dark">
                        <tr>

                          <th scope="col">No BP</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Prodi</th>
                          <th scope="col">Judul</th>
                          <th scope="col">Ketua</th>
                          <th scope="col">Pembimbing 2</th>
                          <th scope="col">Sekretaris</th>
                          <th scope="col">Anggota 1</th>
                          <th scope="col">Anggota 2</th>
                          <th scope="col">Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
<!--   <?php foreach ($get as $key) {

                       ?>
                       <tr>
                        <th scope="row"><?php echo $key->nobp ?></th>
                        <td><?php echo $key->nama ?></td>
                        <td><?php echo $key->password ?></td>
                        <td><?php echo $key->prodi ?></td>
                        <td><?php echo $key->angkatan ?></td>
                        <td><?php echo $key->judul ?></td>
                        <td><?php echo $key->nip_pembimbing1 ?></td>
                        <td><?php echo $key->nip_pembimbing2 ?></td>
                        <td><?php echo $key->nip_penguji1 ?></td>
                        <td><?php echo $key->nip_penguji2 ?></td>
                        <td><?php echo $key->nip_penguji3 ?></td>
                        <td>
                          <a href="<?php echo site_url('C_admin/edit/'.$key->nobp) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>Edit</a>
                          </td>
                          <td>
                            <a href="<?php echo site_url('C_admin/hapus/'.$key->nobp) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  Delete</a>
                          </td>
                        </tr>
                        <?php } ?> -->


                      </tbody>
                    </table>                 



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
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
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#table').DataTable({ 

          "processing": true, 
          "serverSide": true, 
          "order": [], 
          "lengthMenu": [ [5, 10, 25, -1], [5, 10, 25, "All"] ],"pageLength": 10,

          "ajax": {
            "url": "<?php echo site_url('C_kaprodi/get_ajax')?>",
            "type": "POST"
          },


          "columnDefs": [
          { 
            "targets": [ 0 ], 
            "orderable": false, 
          },
          ],

        });

      });
    </script>