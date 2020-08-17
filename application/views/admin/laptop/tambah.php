<div class="main-content">
  <section class="section">

    <div class="section-header">
      <h1>Tambah Data Laptop</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="<?php echo base_url('admin/laptop')?>">Data Laptop</a></div>
        <div class="breadcrumb-item active">Tambah Data Laptop</div>
      </div>
    </div>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="card col-6">
          <div class="card-header">
            <h4>Silakan isi form di bawah ini.</h4>
          </div>
          <div class="card-body">

            <form action="<?php echo base_url('admin/laptop/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group required">
                <label for="merk" class="control-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="<?php echo set_value('merk') ?>" autofocus>
                <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="id_tipe" class="control-label">Tipe</label>
                <select id="id_tipe" name="id_tipe" class="custom-select">
                  <?php foreach($tipe as $tp) : ?>
                    <option value="<?php echo $tp->id ?>"><?php echo $tp->nama ?></option>
                  <?php endforeach ?>
                </select>
                <?php echo form_error('id_tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="kapasitas" class="control-label">Kapasitas</label>
                <div class="input-group-prepend">
                  <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo set_value('kapasitas') ?>">
                  <span class="input-group-text" id="basic-addon1">orang</span>
                </div>
                <?php echo form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="no_plat" class="control-label">No. Plat</label>
                <input type="text" class="form-control" id="no_plat" name="no_plat" value="<?php echo set_value('no_plat') ?>">
                <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="warna" class="control-label">Warna</label>
                <input type="text" class="form-control" id="warna" name="warna" value="<?php echo set_value('warna') ?>">
                <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="tahun" class="control-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo set_value('tahun') ?>">
                <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
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