  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> -->
        <!-- End of Topbar -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php echo $this->session->flashdata('pesan') ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->
            <a href="<?php echo base_url('c_admin/tambah_dosen'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tambah Akun Dosen</a>
          </div>

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
                    <h6 class="m-0 font-weight-bold text-primary">List Data Akun Dosen</h6>
                    </div>
                    <div class="card-body">
                     <div class="table-responsive">
                      <table class="table table-bordered" id="tabledosen" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gelar</th>
                            <th scope="col">Password</th>
                            <th scope="col">Username</th>
                            <th scope="col" colspan="">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>

                         <!-- <?php foreach ($get as $key) {

                           ?>
                           <tr>
                            <th scope="row"><?php echo $key->nip ?></th>
                            <td><?php echo $key->nama ?></td>
                            <td><?php echo $key->gelar ?></td>
                            <td><?php echo $key->password ?></td>
                            <td>
                              <a href="<?php echo site_url('C_admin/editDosen/'.$key->nip) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>Edit</a></td>
                              <td>
                                <a href="<?php echo site_url('C_admin/hapusDosen/'.$key->nip) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  Delete</a>
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

              <!-- Approach -->
              

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
  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>

  <script>
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#tabledosen').DataTable({ 

          "processing": true, 
          "serverSide": true, 
          "order": [], 

          "ajax": {
            "url": "<?php echo site_url('C_admin/get_ajaxDosen')?>",
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