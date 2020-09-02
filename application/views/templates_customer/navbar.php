<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">JARTOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if($this->uri->uri_string() === '') { echo 'active'; } ?>">
          <a class="nav-link" href="#">Home</a>
        </li>
        <?php 
          if($this->session->has_userdata('logged_in')) {
        ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Kurental</a>
            </li>
          
            <div class="dropdown">
              <a 
                class="nav-link dropdown-toggle" 
                id="dropdownAccountButton" 
                data-toggle="dropdown" 
                aria-haspopup="true" 
                aria-expanded="false" 
                href="#"><?php echo 'Hai, '.$this->session->userdata['logged_in']['nama'].'!' ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                <a class="dropdown-item" href="<?php echo base_url('login/logout')?>">Logout</a>
              </div>
            </div>
        <?php 
          } else {
        ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login')?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('register')?>">Register</a>
            </li>
        <?php 
          }
        ?>
      </ul>
    </div>
  </div>
</nav>