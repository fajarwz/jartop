<?php if ($this->session->flashdata('pesan')) : ?>
  <div class="flash-message">
    <p class="alert alert-success">
      <?php echo $this->session->flashdata('pesan') ?>
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </p>
  </div>
<?php endif; ?>