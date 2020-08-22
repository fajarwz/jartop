<body>
  <!-- Navbar -->
  <?php $this->load->view('templates_customer/navbar') ?>

  <div class="jumbotron hero-main text-white align-items-center" style="background-image: url(<?php echo base_url('assets/upload/bg1.jpg') ?>);">

      <div class="row">
        <div class="col">
          <h1 class="display-4">Tinggalkan Laptop Kentang</h1>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <p class="lead">Kamu bisa dapat laptop dengan spek yang kamu mau tanpa harus keluar biaya banyak.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#laptop-main" role="button">Cek Laptop</a>
        </p>
        </div>
      </div>

  </div>

  <!-- Page Content -->
  <div class="container" id="laptop-main">

    <div class="row">

      <?php foreach($laptop as $lp) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">

            <div class="card-img-container">
              <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$lp->gambar) ?>" alt="<?php echo $lp->merk ?>">
            </div>

            <div class="card-body">
              <small>
                <?php
                  echo $lp->status === 'Tersedia' ? 
                  "<span class='badge badge-primary'>Tersedia</span>" : 
                  "<span class='badge badge-danger'>Tidak Tersedia</span>";
                ?>
              </small>

              <h4 class="card-title">
                <a href="<?php echo base_url('customer/detail/data/').$lp->id ?>" class="stretched-link"><?php echo $lp->merk ?></a>
              </h4>

              <p>
              <?php echo $lp->processor ?> 
              | <?php echo $lp->os ?> 
              | <?php echo $lp->storage ?> 
              | <?php echo $lp->ram ?> 
              </p>

              <h5>Rp. <?php echo $lp->harga_sewa ?>/hari</h5>

            
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
  <!-- /.container -->

  