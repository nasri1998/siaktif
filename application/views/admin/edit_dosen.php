
<!DOCTYPE html>
<html lang="en">


<?php $this->load->view("admin/header.php") ?>



<?php $this->load->view("admin/sidebar.php") ?>

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

        <h5>Edit</h5>
      </div>
      <div class="card-body">



        <form action="<?php echo base_url().'C_admin/updateDosen/'?>" method="POST">
          <div class="form-group">
            <label for="nip">NIP</label>
            <input class="form-control <?php echo form_error('nip') ? 'is-invalid':'';?>" type="text" name="nip" value="<?php echo $dsn->nip;?>" readonly/>
            <div class="invalid-feedback">
              <?php echo form_error('nip') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Nama</label>
            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
            type="text" name="nama" placeholder="" value="<?php echo $dsn->nama ?>"  />
            <div class="invalid-feedback">
              <?php echo form_error('nama') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="gelar">Gelar</label>
            <input class="form-control <?php echo form_error('gelar') ? 'is-invalid':'' ?>"
            type="text" name="gelar" placeholder="" value="<?php echo $dsn->gelar ?>" />
            <div class="invalid-feedback">
              <?php echo form_error('gelar') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
            type="text" name="password" placeholder="" value="<?php echo $dsn->password ?>"/>
          </div>

          <div class="form-group">
            <label for="password">Username</label>
            <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
            type="text" name="username" placeholder="" value="<?php echo $dsn->username ?>"/>
          </div>

         <input class="btn btn-success" type="submit" name="btn" value="Save" />
       </form>
     </div>

   </div>

 </div>
        <!-- /.container-fluid


      -->
      <!-- Sticky Footer -->
      <?php $this->load->view("admin/footer.php") ?>

