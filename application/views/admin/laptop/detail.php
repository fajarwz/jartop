<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Laptop</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item"><a href="<?php echo base_url('admin/laptop/index') ?>">Data Laptop</a></div>
        <div class="breadcrumb-item active">Detail Laptop</div>
      </div>
    </div>

    <div class="section-body">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">

            <div class="card">
              <div class="card-body">

                  <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>

                          <tr>
                            <th>Gambar</th>
                            <td>
                              <img 
                                src="<?php echo base_url('assets/upload/'.$laptop->gambar)?>" 
                                alt="<?php echo $laptop->gambar?>" 
                                class="img-fluid"
                              >
                            </td>
                          </tr>

                          <tr>
                            <th>Merk</th>
                            <td><?php echo $laptop->merk ?></td>
                          </tr>

                          <tr>
                            <th>Processor</th>
                            <td><?php echo $laptop->processor ?></td>
                          </tr>

                          <tr>
                            <th>Storage</th>
                            <td><?php echo $laptop->storage ?></td>
                          </tr>
                            
                          <tr>
                            <th>RAM</th>
                            <td><?php echo $laptop->ram ?></td>
                          </tr>
                            
                          <tr>
                            <th>VGA</th>
                            <td><?php echo $laptop->vga ?></td>
                          </tr>

                          <tr>
                            <th>Ukuran Layar</th>
                            <td><?php echo $laptop->ukuran_layar ?></td>
                          </tr>

                          <tr>
                            <th>OS</th>
                            <td><?php echo $laptop->os ?></td>
                          </tr>

                          <tr>
                            <th>Port USB</th>
                            <td><?php echo $laptop->port_usb ?></td>
                          </tr>

                          <tr>
                            <th>CD-ROM</th>
                            <td><?php echo $laptop->is_cd_rom ?></td>
                          </tr>

                          <tr>
                            <th>Daya Tahan Baterai</th>
                            <td><?php echo $laptop->daya_tahan_baterai ?></td>
                          </tr>
                            
                          <tr>
                            <th>Harga Sewa</th>
                            <td>Rp. <?php echo $laptop->harga_sewa ?>/hari</td>
                          </tr>

                          <tr>
                            <th>Status</th>
                            <td>
                              <?php
                                echo $laptop->status === "Tersedia" ? 
                                "<span class='badge badge-primary'>Tersedia</span>" : 
                                "<span class='badge badge-danger'>Tidak Tersedia</span>";
                              ?>
                            </td>
                          </tr>

                          <tr>
                            <th style="width: 180px;">Action</th>
                            <td>

                              <a href="<?php echo base_url('admin/laptop/detail/'.$laptop->id) ?>" class="btn btn-info" title="Detail">
                                <i class="fa fa-eye"></i>
                              </a>

                              <a href="<?php echo base_url('admin/laptop/edit/'.$laptop->id) ?>" class="btn btn-primary" title="Edit">
                                <i class="fa fa-pencil-alt"></i>
                              </a>

                              <a href="<?php echo base_url('admin/laptop/hapus/'.$laptop->id) ?>" class="btn btn-danger" title="Hapus">
                                <i class="fa fa-trash"></i>
                              </a>

                            </td>
                          </tr>
                        </tr>
                      </thead>
                      
                    </table>
              
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