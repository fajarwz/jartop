<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              JARTOP
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">

                <?php if ($this->session->flashdata('pesan')) : ?>
                  <div class="flash-message">
                    <p class="alert alert-<?php echo $this->session->flashdata('tipe-pesan') ?>">
                      <?php echo $this->session->flashdata('pesan') ?>
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </p>
                  </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo base_url('admin/login/login_aksi') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username', '<div class="text-small text-danger">', '</div>')?>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>