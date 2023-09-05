
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

        <h5>CETAK</h5>
      </div>
      <div class="card-body">

        <form action="<?php echo base_url('c_dosen/cetak/'.$mhs->nobp) ?>" method="post" enctype="multipart/form-data">
        
          <input type="hidden" name="nobp" value="<?php echo $mhs->nobp?>" />
          <input type="hidden" name="nip_pembimbing1" value="<?php echo $mhs->nip_pembimbing1?>" />
          <input type="hidden" name="nip_penguji1" value="<?php echo $mhs->nip_penguji1?>" />
          <input type="hidden" name="nip_penguji2" value="<?php echo $mhs->nip_penguji2?>" />
          <input type="hidden" name="nip_penguji3" value="<?php echo $mhs->nip_penguji3?>" />

          <div class="form-group">
            <label for="name">Nama*</label>
            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
            type="text" name="nama" placeholder="" value="<?php echo $mhs->nama ?>" readonly />
            <div class="invalid-feedback">
              <?php echo form_error('name') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="prodi">Prodi</label>
            <input class="form-control <?php echo form_error('prodi') ? 'is-invalid':'' ?>"
            type="text" name="prodi" placeholder="" value="<?php echo $mhs->prodi ?>" readonly />
            <div class="invalid-feedback">
              <?php echo form_error('prodi') ?>
            </div>
          </div>
          <?php foreach ($nilai as $n): ?>
       
           <div class="form-group">
            <label for="">Nilai Akhir</label>
            <input class="form-control <?php echo form_error('prodi') ? 'is-invalid':'' ?>"
            type="text" name="na" placeholder="" value="<?php echo $n->nilai_akhir; ?>" readonly />
          </div>
             <?php endforeach ?>
          <div class="form-group">
            <label for="">Status</label>
            <input class="form-control"
            type="text" name="status" placeholder="lulus/lulus revisi/tidak lulus" value=""/>
           
          </div>
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

    </div>




  </div>
        <!-- /.container-fluid
      -->
      <!-- Sticky Footer -->
      <?php $this->load->view("dosen/footer.php") ?>

     
