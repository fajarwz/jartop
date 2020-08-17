<body>
  <!-- Navbar -->
  <?php $this->load->view('templates_customer/navbar') ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <?php foreach($mobil as $mb) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">

                <div class="card-img-container">
                  <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" alt="<?php echo $mb->merk ?>">
                </div>

                <div class="card-body">
                  <small>
                    <?php
                      echo $mb->status == 1 ? 
                      "<span class='badge badge-primary'>Tersedia</span>" : 
                      "<span class='badge badge-danger'>Tidak Tersedia</span>";
                    ?>
                  </small>

                  <h4 class="card-title">
                    <a href="<?php echo base_url('customer/detail/data/').$mb->id ?>" class="stretched-link"><?php echo $mb->merk ?></a>
                  </h4>

                  <p>
                  <?php 
                    foreach($tipe as $tp) : 
                      if($mb->id_tipe == $tp->id) :
                        echo $tp->nama;
                      endif;
                    endforeach; 
                  ?> 
                  | <?php echo $mb->kapasitas ?> orang
                  </p>

                  <h5>Rp. <?php echo $mb->harga_sewa ?>/jam</h5>

                
                </div>
                <!-- card-body  -->

              </div>
              <!-- card h-100  -->

            </div>
            <!-- col-lg-4 col-md-6 mb-4 -->
            
          <?php endforeach ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  