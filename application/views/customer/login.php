<body>
  <!-- Page Content -->
  <div class="container main-content">

    <div class="row my-4">

      <div class="container">
        <div class="row justify-content-center">
          <div class="card col-lg-4 col-sm-6 col-10">
            <div class="card-header bg-white">
              <h4>Login</h4>
              <small>Silakan isi form di bawah ini.</small>
            </div>
            <div class="card-body">

              <?php if ($this->session->flashdata('pesan')) : ?>
                <div class="flash-message">
                  <p class="alert alert-danger">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  </p>
                </div>
              <?php endif; ?>

              <form action="<?php echo base_url('login/login_aksi') ?>" method="POST">

                <div class="form-group required">
                  <label for="username" class="control-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username') ?>" tabindex="1" autofocus>
                  <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group required">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password') ?>" tabindex="2">
                  <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <button type="submit" class="btn btn-primary btn-block my-2">
                  Login
                </button>

                <a href="<?php echo base_url('register') ?>" class="btn btn-secondary btn-block my-2">
                  Belum punya akun
                </button>

                <a href="<?php echo base_url('/') ?>" class="btn btn-link btn-block my-2">
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
