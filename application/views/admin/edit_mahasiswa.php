
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



        <form action="<?php echo base_url().'C_admin/update/'?>" method="POST">
          <div class="form-group">
            <label for="nobp">Nobp</label>
            <input class="form-control <?php echo form_error('nobp') ? 'is-invalid':'';?>" type="text" name="nobp" value="<?php echo $mhs->nobp;?>" readonly/>
            <div class="invalid-feedback">
              <?php echo form_error('nobp') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Nama</label>
            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
            type="text" name="nama" placeholder="" value="<?php echo $mhs->nama ?>" readonly />
            <div class="invalid-feedback">
              <?php echo form_error('nama') ?>
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

          <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input class="form-control <?php echo form_error('prodi') ? 'is-invalid':'' ?>"
            type="text" name="angkatan" placeholder="" value="<?php echo $mhs->angkatan ?>" readonly/>
            <div class="invalid-feedback">
              <?php echo form_error('angkatan') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="judul">Judul</label>
            <input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
            type="text" name="judul" placeholder="" value="<?php echo $mhs->judul ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('judul') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="Ketua Sidang">Ketua Sidang</label>
            <input class="form-control <?php echo form_error('Ketua Sidang') ? 'is-invalid':'' ?>"
            type="text" name="KetuaSidang" placeholder="" value="<?php echo $mhs->nip_pembimbing1 ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('Ketua Sidang') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="Pembimbing 2">Pembimbing 2</label>
            <input class="form-control <?php echo form_error('Pembimbing 2') ? 'is-invalid':'' ?>"
            type="text" name="Pembimbing2" placeholder="" value="<?php echo $mhs->nip_pembimbing2 ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('Pembimbing 2') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="Sekretaris Sidang">Sekretaris Sidang</label>
            <input class="form-control <?php echo form_error('Sekretaris Sidang') ? 'is-invalid':'' ?>"
            type="text" name="SekretarisSidang" placeholder="" value="<?php echo $mhs->nip_penguji1 ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('Sekretaris Sidang') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="Anggota 1">Anggota 1</label>
            <input class="form-control <?php echo form_error('Anggota 1') ? 'is-invalid':'' ?>"
            type="text" name="Anggota1" placeholder="" value="<?php echo $mhs->nip_penguji2 ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('Anggota 1') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="Anggota 2">Anggota 2</label>
            <input class="form-control <?php echo form_error('Anggota 2') ? 'is-invalid':'' ?>"
            type="text" name="Anggota2" placeholder="" value="<?php echo $mhs->nip_penguji3 ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('Anggota 2') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
            type="text" name="password" placeholder="" value="<?php echo $mhs->password ?>"/>
            <div class="invalid-feedback">
              <?php echo form_error('judul') ?>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Konfirmasi</label>
           <div>
             <?php if ($mhs->konfirmasi == 'Ya') { ?>
               <label class="radio-inline"><input type="radio" name="konfirmasi" checked="<?php echo $mhs->konfirmasi == 'Ya' ? 'checked' : ''; ?>" value="Ya">Ya</label>
               <label class="radio-inline"><input type="radio" name="konfirmasi" value="Tidak">Tidak</label>
             <?php }else{ ?>
                <label class="radio-inline"><input type="radio" name="konfirmasi" value="Ya">Ya</label>
               <label class="radio-inline"><input type="radio" name="konfirmasi" checked="<?php echo $mhs->konfirmasi == 'Tidak' ? 'checked' : ''; ?>" value="Tidak">Tidak</label>
              <?php } ?>
           </div>
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

