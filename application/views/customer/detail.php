<body>
  <!-- Navbar -->
  <?php $this->load->view('templates_customer/navbar') ?>

  <!-- Page Content -->
  <div class="container main-content">

    <div class="row my-4">

      <?php foreach($laptop as $lp) : ?>

        <div class="col-lg-5 col-md-6 col-12">
          <img 
            src="<?php echo base_url('assets/upload/'.$lp->gambar)?>" 
            alt="<?php echo $lp->gambar?>" 
            class="img-fluid"
          >
        </div>

        <div class="col-lg-7 col-md-6 col-12">

          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <!-- <strong>Tipe</strong> -->
                <p>
                <?php
                  echo $lp->status === 'Tersedia' ? 
                  "<span class='badge badge-primary'>Tersedia</span>" : 
                  "<span class='badge badge-danger'>Tidak Tersedia</span>";
                ?>
                </p>

                <h3><?php echo $lp->merk ?></h3>
                <p><?php echo $lp->processor ?></p>

                <h4 class="text-primary">Rp. <?php echo $lp->harga_sewa ?>/hari</h4>

              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>Sistem Operasi</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->os ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>Storage</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->storage ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>RAM</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->ram ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>VGA</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->vga ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>Ukuran Layar</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->ukuran_layar ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>Port USB</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->port_usb ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>CD-ROM</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->is_cd_rom ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-lg-6">
                <strong>Daya Tahan Baterai</strong>
              </div>

              <div class="col-lg-6">
                <?php echo $lp->daya_tahan_baterai ?>
              </div>

            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">

              <div class="col-12">
                <a href="#" class="btn btn-sm btn-primary btn-rental-sekarang py-1 px-4" title="Rental">
                  <strong>Rental Sekarang</strong>
                </a>
              </div>

            </div>
          </div>

        </div>

      <?php endforeach ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
