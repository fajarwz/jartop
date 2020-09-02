<body>
  <!-- Page Content -->
  <div class="container main-content">

    <div class="row my-4">

      <div class="container">
        <div class="row justify-content-center">
          <div class="card col-lg-6 col-sm-8 col-10">
            <div class="card-header bg-white">
              <h4>Login</h4>
              <small>Silakan isi form di bawah ini.</small>
            </div>
            <div class="card-body">

              <form action="<?php echo base_url('login/login_aksi') ?>" method="POST">

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
