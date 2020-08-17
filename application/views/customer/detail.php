<body>
  <!-- Navbar -->
  <?php $this->load->view('templates_customer/navbar') ?>

  <!-- Page Content -->
  <div class="container main-content">

    <div class="row">

      <?php foreach($mobil as $mb) : ?>
        <div class="col-lg-12">

          <div class="row my-4">

            <div class="col-lg-5 col-md-6 col-12">
              <img 
                src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" 
                alt="<?php echo $mb->gambar?>" 
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
                      echo $mb->status == 1 ? 
                      "<span class='badge badge-primary'>Tersedia</span>" : 
                      "<span class='badge badge-danger'>Tidak Tersedia</span>";
                    ?>
                    </p>

                    <h3><?php echo $mb->merk ?></h3>
                    <p>
                      <?php 
                        foreach($tipe as $tp) : 
                          if($mb->id_tipe == $tp->id) :
                            echo $tp->nama;
                          endif;
                        endforeach; 
                      ?>
                    </p>

                    <h4 class="text-primary">Rp. <?php echo $mb->harga_sewa ?>/jam</h4>

                  </div>

                </div>
              </div>

              <hr>
              <div class="container">
                <div class="row">

                  <div class="col-lg-6">
                    <strong>Kapasitas</strong>
                  </div>

                  <div class="col-lg-6">
                    <?php echo $mb->kapasitas ?> orang
                  </div>

                </div>
              </div>

              <hr>
              <div class="container">
                <div class="row">

                  <div class="col-lg-6">
                    <strong>No. Plat</strong>
                  </div>

                  <div class="col-lg-6">
                    <?php echo $mb->no_plat ?>
                  </div>

                </div>
              </div>

              <hr>
              <div class="container">
                <div class="row">

                  <div class="col-lg-6">
                    <strong>Warna</strong>
                  </div>

                  <div class="col-lg-6">
                    <?php echo $mb->warna ?>
                  </div>

                </div>
              </div>

              <hr>
              <div class="container">
                <div class="row">

                  <div class="col-lg-6">
                    <strong>Tahun</strong>
                  </div>

                  <div class="col-lg-6">
                    <?php echo $mb->tahun ?>
                  </div>

                </div>
              </div>

            </div>


          </div>

        </div>
      <!-- /.col-lg-9 -->
      <?php endforeach ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
