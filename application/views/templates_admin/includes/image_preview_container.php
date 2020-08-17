<div class="mb-2">
  <img 
    id="image-preview-container" 
    src="
      <?php 
        if (isset($gambar)) {
          echo base_url('assets/upload/'.$gambar);
        } else {
          echo '';
        }
      ?>
    "
    alt="Preview Image"
  >
</div>