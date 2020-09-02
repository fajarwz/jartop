<div class="main-content">
  <section class="section">

    <div class="section-header">
      <h1>Tambah Data Customer</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="<?php echo base_url('admin/customer')?>">Data Customer</a></div>
        <div class="breadcrumb-item active">Tambah Data Customer</div>
      </div>
    </div>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="card col-6">
          <div class="card-header">
            <h4>Silakan isi form di bawah ini.</h4>
          </div>
          <div class="card-body">

            <form action="<?php echo base_url('admin/customer/tambah_aksi') ?>" method="POST">

              <div class="form-group required">
                <label for="username" class="control-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username') ?>" autofocus>
                <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="password" class="control-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password') ?>" autofocus>
                <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="nama" class="control-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama') ?>">
                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="gender" class="control-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo set_value('gender') ?>">
                <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="alamat" class="control-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat') ?>">
                <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="no_telp" class="control-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo set_value('no_telp') ?>">
                <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="no_ktp" class="control-label">No. KTP</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo set_value('no_ktp') ?>">
                <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="harga_sewa" class="control-label">Harga Sewa</label>
                <div class="input-group-prepend">
                  <span class="input-group-text" id="harga_sewa" id="basic-addon1">Rp.</span>
                  <input type="text" class="form-control" name="harga_sewa" value="<?php echo set_value('harga_sewa') ?>">
                  <span class="input-group-text" id="basic-addon1">/jam</span>
                </div>
                <?php echo form_error('harga_sewa', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="status" class="control-label">Status</label>
                <select id="status" name="status" class="custom-select">
                  <option value="" selected>Pilih Status...</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="gambar" class="control-label">Foto</label>

                <?php $this->load->view('templates_admin/includes/image_preview_container') ?>
          
                <input type="file" class="form-control mb-2" id="image-need-preview" name="gambar">
                
                <div class="alert alert-primary" role="alert">
                  Note: 
                  <br> Mohon memasukkan foto dengan rasio 1:1
                </div>

              </div>

              <?php $this->load->view('templates_admin/includes/btn_save_cancel') ?>

            </form>

          </div>
        </div>
      </div>
    </div>

  </section>
</div>