<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Mobil</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="<?php echo base_url('admin/data_mobil/index') ?>">Data Mobil</a></div>
        <div class="breadcrumb-item active">Detail Mobil</div>
      </div>
    </div>

    <div class="section-body">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">

            <div class="card">
              <div class="card-body">
              
                <?php foreach($mobil as $mb) : ?>

                  <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <?php foreach($mobil as $mb) : ?>

                          <tr>
                            <th>Gambar</th>
                            <td>
                              <img 
                                src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" 
                                alt="<?php echo $mb->gambar?>" 
                                class="img-fluid"
                              >
                            </td>
                          </tr>

                          <tr>
                            <th>Merk</th>
                            <td><?php echo $mb->merk ?></td>
                          </tr>

                          <tr>
                            <th>Tipe</th>
                            <td>
                              <?php 
                                foreach($tipe as $tp) : 
                                  if($mb->id_tipe == $tp->id) :
                                    echo $tp->nama;
                                  endif;
                                endforeach; 
                              ?>
                            </td>
                          </tr>

                          <tr>
                            <th>Kapasitas</th>
                            <td><?php echo $mb->kapasitas ?> orang</td>
                          </tr>
                            
                          <tr>
                            <th>No. Plat</th>
                            <td><?php echo $mb->no_plat ?></td>
                          </tr>
                            
                          <tr>
                            <th>Warna</th>
                            <td><?php echo $mb->warna ?></td>
                          </tr>

                          <tr>
                            <th>Tahun</th>
                            <td><?php echo $mb->tahun ?></td>
                          </tr>
                            
                          <tr>
                            <th>Harga Sewa</th>
                            <td>Rp. <?php echo $mb->harga_sewa ?>/jam</td>
                          </tr>

                          <tr>
                            <th>Status</th>
                            <td>
                              <?php
                                echo $mb->status == 1 ? 
                                "<span class='badge badge-primary'>Tersedia</span>" : 
                                "<span class='badge badge-danger'>Tidak Tersedia</span>";
                              ?>
                            </td>
                          </tr>

                          <tr>
                            <th style="width: 180px;">Action</th>
                            <td>

                              <a href="<?php echo base_url('admin/data_mobil/detail_mobil/'.$mb->id) ?>" class="btn btn-info" title="Detail">
                                <i class="fa fa-eye"></i>
                              </a>

                              <a href="<?php echo base_url('admin/data_mobil/edit_mobil/'.$mb->id) ?>" class="btn btn-primary" title="Edit">
                                <i class="fa fa-pencil-alt"></i>
                              </a>

                              <a href="<?php echo base_url('admin/data_mobil/hapus_mobil/'.$mb->id) ?>" class="btn btn-danger" title="Hapus">
                                <i class="fa fa-trash"></i>
                              </a>

                            </td>
                          </tr>
                        </tr>
                        <?php endforeach ?>
                      </thead>
                      
                    </table>

                <?php endforeach ?>
              
              </div>
              <!-- card-body  -->

            </div>
            <!-- card  -->

          </div>
          <!-- col-8  -->

        </div>
        <!-- row justify-content-center -->
        
      </div>
      <!-- container  -->
      
    </div>
    <!-- section-body  -->

  </section>
</div>
<!-- main-content  -->