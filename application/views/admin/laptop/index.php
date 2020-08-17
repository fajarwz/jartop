<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Mobil</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item active">Data Mobil</div>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">

        <?php if ($this->session->flashdata('pesan')) : ?>
          <div class="flash-message">
            <p class="alert alert-success">
              <?php echo $this->session->flashdata('pesan') ?>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
          </div>
        <?php endif; ?>

          <a href="<?php echo base_url('admin/laptop/tambah')?>" class="btn btn-sm btn-primary mb-2">
            <i class="fas fa-plus fa-sm"></i> Tambah Data Laptop
          </a>
        
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Merk</th>
                    <th>Processor</th>
                    <th>OS</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach($laptop as $lp) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                      <img 
                        src="<?php echo base_url('assets/upload/'.$lp->gambar)?>" 
                        alt="<?php echo $lp->gambar?>" 
                        class="image-table"
                      >
                    </td>
                    <td><?php echo $lp->merk ?></td>
                    <td><?php echo $lp->processor ?></td>
                    <td><?php echo $lp->os ?></td>
                    <td>Rp. <?php echo $lp->harga_sewa ?>/hari</td>
                    <td>
                      <?php
                        echo $lp->status == "Tersedia" ? 
                        "<span class='badge badge-primary'>Tersedia</span>" : 
                        "<span class='badge badge-danger'>Tidak Tersedia</span>";
                      ?>
                    </td>

                    <td class="btn-action-3">

                      <a href="<?php echo base_url('admin/laptop/detail/'.$lp->id) ?>" class="btn btn-sm btn-info" title="Detail">
                        <i class="fa fa-eye fa-sm fa-fw"></i>
                      </a>

                      <a href="<?php echo base_url('admin/laptop/edit/'.$lp->id) ?>" class="btn btn-sm btn-primary" title="Edit">
                        <i class="fa fa-pencil-alt fa-sm fa-fw"></i>
                      </a>

                      <a href="<?php echo base_url('admin/laptop/hapus/'.$lp->id) ?>" class="btn btn-sm btn-danger" title="Hapus">
                        <i class="fa fa-trash fa-sm fa-fw"></i>
                      </a>

                    </td>

                  </tr>
                <?php endforeach ?>
                
              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </section>
</div>