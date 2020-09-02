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

            <form action="<?php echo base_url('admin/laptop/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $laptop->id ?>">

              <div class="form-group required">
                <label for="merk" class="control-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $laptop->merk ?>" autofocus>
                <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="processor" class="control-label">Processor</label>
                <input type="text" class="form-control" id="processor" name="processor" value="<?php echo $laptop->processor ?>">
                <?php echo form_error('processor', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="storage" class="control-label">Storage</label>
                <input type="text" class="form-control" id="storage" name="storage" value="<?php echo $laptop->storage ?>">
                <?php echo form_error('storage', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="ram" class="control-label">RAM</label>
                <input type="text" class="form-control" id="ram" name="ram" value="<?php echo $laptop->ram ?>">
                <?php echo form_error('ram', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="vga" class="control-label">VGA</label>
                <input type="text" class="form-control" id="vga" name="vga" value="<?php echo $laptop->vga ?>">
                <?php echo form_error('vga', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="ukuran_layar" class="control-label">Ukuran Layar</label>
                <input type="text" class="form-control" id="ukuran_layar" name="ukuran_layar" value="<?php echo $laptop->ukuran_layar ?>">
                <?php echo form_error('ukuran_layar', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="os" class="control-label">OS</label>
                <input type="text" class="form-control" id="os" name="os" value="<?php echo $laptop->os ?>">
                <?php echo form_error('os', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="port_usb" class="control-label">Port USB</label>
                <input type="number" class="form-control" id="port_usb" name="port_usb" value="<?php echo $laptop->port_usb ?>">
                <?php echo form_error('port_usb', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="is_cd_rom" class="control-label">CD-ROM</label>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="is_cd_rom" id="Ya" value="Ya" <?php ($laptop->is_cd_rom === "Ya") ? "checked" : "" ?>> 
                    <label for="Ya" class="form-check-label"> Ya</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="is_cd_rom" id="Tidak" value="Tidak" <?php ($laptop->is_cd_rom === "Tidak") ? "checked" : "" ?>>
                    <label for="Tidak" class="form-check-label"> Tidak</label>
                  </div>
                <?php echo form_error('is_cd_rom', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="daya_tahan_baterai" class="control-label">Daya Tahan Baterai</label>
                <select id="daya_tahan_baterai" name="daya_tahan_baterai" class="custom-select">
                  <option value="< 1 Jam" <?php echo ($laptop->daya_tahan_baterai === "< 1 Jam") ? "selected" : ""?>>< 1 Jam</option>
                  <option value="1 Jam" <?php echo ($laptop->daya_tahan_baterai === "1 Jam") ? "selected" : ""?>>1 Jam</option>
                  <option value="2 Jam" <?php echo ($laptop->daya_tahan_baterai === "2 Jam") ? "selected" : ""?>>2 Jam</option>
                  <option value="3 Jam"  <?php echo ($laptop->daya_tahan_baterai === "3 Jam") ? "selected" : ""?>>3 Jam</option>
                  <option value="> 3 Jam"  <?php echo ($laptop->daya_tahan_baterai === "> 3 Jam") ? "selected" : ""?>>> 3 Jam</option>
                </select>
                <?php echo form_error('daya_tahan_baterai', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="harga_sewa" class="control-label">Harga Sewa</label>
                <input type="text" class="form-control" name="harga_sewa" value="<?php echo $laptop->harga_sewa ?>">
                <?php echo form_error('harga_sewa', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group required">
                <label for="status" class="control-label">Status</label>
                <select name="status" class="custom-select">
                  <option value="Tersedia" <?php echo ($laptop->status == "Tersedia") ? "selected" : ""?>>Tersedia</option>
                  <option value="Tidak Tersedia" <?php echo ($laptop->status == "Tidak Tersedia") ? "selected" : ""?>>Tidak Tersedia</option>
                </select>
                <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="image-need-preview" class="control-label">Foto</label>

                <?php 
                  $data['gambar'] = $laptop->gambar;
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

          </div>
        </div>
      </div>
    </div>

  </section>
</div>