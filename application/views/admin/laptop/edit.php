<div class="main-content">
  <section class="section">
  
    <div class="section-header">
      <h1>Edit Data Mobil</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="<?php echo base_url('admin/data_mobil')?>">Data Mobil</a></div>
        <div class="breadcrumb-item active">Edit Data Mobil</div>
      </div>
    </div>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="card col-6">
          <div class="card-header">
            <h4>Silakan edit form di bawah ini.</h4>
          </div>
          <div class="card-body">

            <?php foreach($mobil as $mb) : ?>
              <form action="<?php echo base_url('admin/data_mobil/edit_mobil_aksi') ?>" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $mb->id ?>">

                <div class="form-group required">
                  <label for="merk" class="control-label">Merk</label>
                  <input type="text" class="form-control" name="merk" value="<?php echo $mb->merk ?>" autofocus>
                  <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="id_tipe" class="control-label">Tipe</label>
                  <select name="id_tipe" class="custom-select">
                    <?php foreach($tipe as $tp) : ?>
                      <option value="<?php echo $tp->id ?>" <?php echo ($mb->id_tipe == $tp->id) ? 'selected' : ''?>><?php echo $tp->nama ?></option>
                    <?php endforeach ?>
                  </select>
                  <?php echo form_error('id_tipe', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="kapasitas" class="control-label">Kapasitas</label>
                  <input type="text" class="form-control" name="kapasitas" value="<?php echo $mb->kapasitas ?>">
                  <?php echo form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="no_plat" class="control-label">No. Plat</label>
                  <input type="text" class="form-control" name="no_plat" value="<?php echo $mb->no_plat ?>">
                  <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="warna" class="control-label">Warna</label>
                  <input type="text" class="form-control" name="warna" value="<?php echo $mb->warna ?>">
                  <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="tahun" class="control-label">Tahun</label>
                  <input type="text" class="form-control" name="tahun" value="<?php echo $mb->tahun ?>">
                  <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="harga_sewa" class="control-label">Harga Sewa</label>
                  <input type="text" class="form-control" name="harga_sewa" value="<?php echo $mb->harga_sewa ?>">
                  <?php echo form_error('harga_sewa', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="status" class="control-label">Status</label>
                  <select name="status" class="custom-select">
                    <option value="" selected>Pilih Status...</option>
                    <option value="1" <?php echo ($mb->status == '1') ? 'selected' : ''?>>Tersedia</option>
                    <option value="0" <?php echo ($mb->status == '0') ? 'selected' : ''?>>Tidak Tersedia</option>
                  </select>
                  <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group">
                  <label for="gambar" class="control-label">Foto</label>

                  <?php 
                    $data['gambar'] = $mb->gambar;
                    $this->load->view('templates_admin/includes/image_preview_container', $data);
                  ?>
            
                  <input type="file" class="form-control mb-2" id="image-need-preview" name="gambar">
                  
                  <div class="alert alert-primary" role="alert">
                    Note: 
                    <br> Mohon memasukkan foto dengan rasio sekitar 1:1
                  </div>

                </div>

                <?php $this->load->view('templates_admin/includes/btn_save_cancel') ?>

              </form>
            <?php endforeach ?>

          </div>
        </div>
      </div>
    </div>

  </section>
</div>