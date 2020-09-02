<body>

  <!-- Page Content -->
  <div class="container main-content">

    <div class="row my-4">

      <div class="container">
        <div class="row justify-content-center">
          <div class="card col-lg-6 col-sm-8 col-10">
            <div class="card-header bg-white">
              <h4>Register</h4>
              <small>Silakan isi form di bawah ini.</small>
            </div>
            <div class="card-body">

              <form action="<?php echo base_url('register/register_aksi') ?>" method="POST">

                <div class="form-group required">
                  <label for="username" class="control-label">Username</label>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username') ?>" autofocus>
                  </div>
                  <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password') ?>" autofocus>
                  <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="nama" class="control-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama') ?>">
                  <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="gender" class="control-label">Jenis Kelamin</label><br>
                  <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="laki-laki" value="Laki-laki" checked> 
                    <label for="laki-laki" class="form-check-label"> Laki-laki</label>
                  </div>
                  <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="perempuan" value="Perempuan">
                    <label for="perempuan" class="form-check-label"> Perempuan</label>
                  </div>
                  <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="alamat" class="control-label">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat"><?php echo set_value('alamat') ?></textarea>
                  <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="no_telp" class="control-label">No. Telepon</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo set_value('no_telp') ?>">
                  <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="no_ktp" class="control-label">No. KTP</label>
                  <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo set_value('no_ktp') ?>">
                  <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <button type="submit" class="btn btn-primary btn-block my-2">
                  Register
                </button>

                <a href="<?php echo base_url('login')?>" class="btn btn-secondary btn-block my-2">
                  Sudah punya akun
                </a>

                <a href="<?php echo base_url('/')?>" class="btn btn-link btn-block my-2">
                  <= Kembali ke Home
                </a>

              </form>

            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
