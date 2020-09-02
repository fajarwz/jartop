<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Customer</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Menu</a></div>
        <div class="breadcrumb-item active">Data Customer</div>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>No. KTP</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach($customer as $cs) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $cs->username ?></td>
                    <td><?php echo $cs->nama ?></td>
                    <td><?php echo $cs->gender ?></td>
                    <td><?php echo $cs->alamat ?></td>
                    <td><?php echo $cs->no_telp ?></td>
                    <td><?php echo $cs->no_ktp ?></td>

                    <td class="btn-action-2">

                      <a href="<?php echo base_url('admin/customer/edit/'.$cs->id) ?>" class="btn btn-sm btn-primary" title="Edit">
                        <i class="fa fa-pencil-alt fa-sm fa-fw"></i>
                      </a>

                      <a href="<?php echo base_url('admin/customer/hapus/'.$cs->id) ?>" class="btn btn-sm btn-danger" title="Hapus">
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